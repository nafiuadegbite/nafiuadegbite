let http = require("http");
let fs = require("fs");

const ip = "127.0.0.1";
const port = 4000;

http
  .createServer(function(req, res) {
    console.log("request", req.url);
    let body = "";
    if (req.url === "/message" && req.method === "POST") {
      req.on("data", data => {
        body += data.toString();
      });
      req.on("end", () => {
        fs.writeFile("message.txt", body, function(err) {
          if (err) throw err;
        });
        res.end("message sent");
      });
    } else {
      res.writeHead(200, { "Content-Type": "text/html" });
      res.write('<form action="/message" method="post">');
      res.write('<input type="text" name="message"><br>');
      res.write('<input type="submit">');
      res.write("</form>");
      return res.end();
    }
  })
  .listen(port, ip);

console.log("Running at http://" + ip + ":" + port + "/");
