@extends('layouts.master')
@section('noidung')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Danh sách sinh viên</h2>
  
  
  
  
  
  <p>MYSQL PDO</p>
  <table class="table table-striped">
  <thead>
      <tr>
        <th>Họ tên</th>
        <th>Mã số sinh viên</th>
        <th>Ngày sinh</th>
        <th><th>
        <th><th>
      </tr>
    </thead>
  <tbody>
  <?php 

          ?>
        @foreach($student as $row)
        <tr>
        <td>{{ $row['hoten'] }}</td>
        <td>{{ $row['mssv'] }}</td>
        <td>{{ $row['ngaysinh'] }}</td>
        <td><a href = "{{ route('home.edit', $row['id']) }}"><button type="button" class="btn btn-primary">sửa</button><a> </a><a href = "" onclick="return confirm('Bạn có chắc muốn xóa thông tin này trong file json?')"><button type="button" class="btn btn-primary">xóa</button></a></td>
        
        @endforeach
        
      </tr>
    </tbody>
  </table>
  
</div>

</body>
</html>

@endsection


