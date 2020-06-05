 import { createConnection } from 'mysql';

var con = createConnection({
  host: "localhost",
  user: "root",
  password: "Lofasz123",
  database: "teszt"
});

con.connect(function(err) {
  if (err) throw err;
  var sql = "SELECT * FROM team LIMIT 5";
  con.query(sql, function (err, result) {
    if (err) throw err;
    console.log(result);
  });
});   