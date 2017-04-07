var http = require("http");
var fs = require("fs");

http.createServer(function(request, response) {
  // HTTP OK header
  response.writeHead(200, {'Content-Type': 'text/plain'});

  // Read our sample file
  fs.readFile('./sample.txt', 'utf8', function(err, data) {
    if (err) {
      console.log(err);
    } else {
      // Sample response body
      response.end(data.toString());
    }
  });
}).listen(8081);

// Console message
console.log('Server running at http://127.0.0.1:8081/');
