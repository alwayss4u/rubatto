<?php 

	// GET 방식으로 전달된 memo글의 번호(num) 얻어오기.

	$num = $_GET['num'];

	require "../lib/dbconn.php";

	// 삭제 쿼리

	$sql = "DELETE FROM memo WHERE num='$num'";

	mysqli_query($conn, $sql);

	mysqli_close($conn);

	// 이전페이지 이동.
	echo ("
		<script>
			location.href='memo.php';
		</script>
		");


 ?>