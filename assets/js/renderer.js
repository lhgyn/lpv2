var lowdb = require('lowdb');

var adapter = new LocalStorage('db')
var db = low(adapter)