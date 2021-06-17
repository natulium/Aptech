<?php
require_once ('db/dbhelper.php');
require_once ('utils/utility.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Phản hồi</title>
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
	    <a class="nav-link" href="#">Ảnh</a>
	  </li>
	</ul>
	
		<div class="panel panel-primary">
			<div class="panel-heading" >
				<h2 style="text-align: center; padding: 10px">Thông tin phản hồi</h2>			
			</div>
			<div class="panel-body">
				<table class="table table-bordered ">
					<thead>
						<tr>
							<th>STT</th>
							<th>Id</th>		
							<th>Tên</th>			
							<th>Email</th>
							<th>SDT</th>
							<th>Tiêu đề</th>
							<th>Nội dung</th>
							<th>Thời gian</th>
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
					    $limit = 2;
					    $firstIndex = ($page -1) * $limit; 

						$sql      = "select * from feedback where 1  limit $firstIndex,$limit";
						$memberList = executeResult($sql);	

						$sql = "select count(id) as total from feedback";	
						$countResult = executeSingleResult($sql);	

						$count = $countResult['total'];	
						$number = ceil($count/$limit);
						foreach ($memberList as $item) {
							echo '<tr>
									<td>'.(++$firstIndex).'</td>
									<td>'.$item['id'].'</td>								
									<td>'.$item['name'].'</td>
									<td>'.$item['email'].'</td>
									<td>'.$item['phone'].'</td>
									<td>'.$item['title'].'</td>
									<td style=" text-align: right;">'.$item['message'].'</td>
									<td>'.$item['upload_date'].'</td>
									<td><button class="btn btn-danger" onclick="deleteM('.$item['id'].')">Xóa</button></td>
								</tr>';
						}						
						?>
						
				</tbody>
				</table>
				<?=pagination($number,$page,'')?>
				
			</div>
		</div>
	
	<script type="text/javascript">
		function deleteM(id) {
			option = confirm('Bạn có muốn xoá không')
			if(!option) {
				return;
			}
			console.log(id)
			$.post('delete1.php', {
				'id': id
			}, function(data) {
				alert(data)
				location.reload()
			})
		}
	</script>
</body>
</html>