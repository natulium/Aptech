<?php
require_once ('db/dbhelper.php');
require_once ('utils/utility.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Thông tin huấn luyện viên</title>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<ul class="nav nav-tabs">
	  <li class="nav-item">
	    <a class="nav-link active" href="memberList.php">Thành Viên</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="trainerList.php">Huần Luyện Viên</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="feedbackList.php">Phản hồi</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="#.php">Ảnh</a>
	  </li>
	</ul>
	
		<div class="panel panel-primary">
			<div class="panel-heading" >
				<h2 style="text-align: center; padding: 10px">Thông tin huấn luyện viên</h2>
				<div class="row">
					<div class="col-lg-6">
						<form method="GET">
							<input type="text" name="search" class="form-control" placeholder="Tìm kiếm theo tên">
						</form>
					</div>
					<div class="col-lg-6">
					<button class="btn btn-success" onclick="" style="float: right; width: 150px">Thêm</button>
					</div>
				</div>
				
				
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>STT</th>
							<th>Id</th>
							<th>Tên</th>	
							<th>SDT</th>
							<th>Email</th>
							<th>Ngày sinh</th>
							<th>Giới tính</th>
							<th>Môn dạy</th>
							<th>Kinh nghiệm</th>
							<th>Ghi chú</th>
							<th width="60px"></th>
							<th width="60px"></th>
						</tr>
					</thead>
					<tbody>

						<?php
						if (isset($_GET['page'])) {
					            $page = $_GET['page'];
					        } else {
					            $page = 1;
					       	}
					    $limit = 10;
					    $firstIndex = ($page -1) * $limit; 

					    $search = '';
					    if(isset($_GET['search'])){
					    	$search = $_GET['search'];
					    }
					    $addition = '';
					    if(!empty($search)){
					    	$addition = 'and name like "%'.$search.'%" ';
					    }

						$sql      = "select * from trainers where 1 $addition limit $firstIndex,$limit";
						$memberList = executeResult($sql);	

						$sql = "select count(id) as total from trainers where 1 $addition";	
						$countResult = executeSingleResult($sql);	

						$count = $countResult['total'];	
						$number = ceil($count/$limit);
						foreach ($memberList as $item) {
							echo '<tr>
									<td>'.(++$firstIndex).'</td>
									<td>'.$item['id'].'</td>							
									<th>'.$item['name'].'</th>	
									<th>'.$item['phone'].'</th>
									<th>'.$item['email'].'</th>
									<th>'.$item['birthday'].'</th>
									<th>'.$item['gender'].'</th>
									<th>'.$item['sport'].'</th>
									<th>'.$item['experience'].'</th>
									<th>'.$item['note'].'</th>
									<td><button class="btn btn-warning" onclick=\'window.open("input.php?id='.$item['id'].'","_self")\'>Sửa</button></td>
									<td><button class="btn btn-danger" onclick="deleteM('.$item['id'].')">Xóa</button></td>
								</tr>';
						}						
						?>
						
				</tbody>
				</table>
				<?=pagination($number,$page,'&search='.$search)?>
				
			</div>
		</div>
	
	<script type="text/javascript">
		function deleteM(id) {
			option = confirm('Bạn có muốn xoá không')
			if(!option) {
				return;
			}

			console.log(id)
			$.post('delete3.php', {
				'id': id
			}, function(data) {
				alert(data)
				location.reload()
			})
		}
	</script>
</body>
</html>