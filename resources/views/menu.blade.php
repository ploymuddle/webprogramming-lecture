<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.vertical-menu {
  width: 200px;
}

.vertical-menu a {
  background-color: #eee;
  color: black;
  display: block;
  padding: 12px;
  text-decoration: none;
}

.vertical-menu a:hover {
  background-color: #ccc;
}

.vertical-menu a.active {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>

<h1>Vertical Menu</h1>

<div class="vertical-menu">
  <a href="#" class="active">Home</a>
  <a href="/menu/77/kmitl">Link 1</a>
  <a href="/welcome">Link 2</a>
  <a href="#">Link 3</a>
  <a href="#">Link 4</a>
</div>
{{$data}}
{{$university}}
</body>
</html>
