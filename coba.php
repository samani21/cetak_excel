<table class="table table-bordered table-hover">
    <br>
    <thead>
    <tr>
    <th >No</th>
                    <th >No Admin</th>
                    <th >Nama</th>
                    <th >Tempat Lahir</th>
                    <th >Tanggal Lahir</th>
                    <th >Agama</th>
                    <th >Jenis Kelamin</th>
                    <th >Alamat</th>
                    <th >No Telepon</th>

    </tr>
    </thead>
    <?php
                include "koneksi.php";
                $no=1;
                if(isset($_POST['submit'])){
                    $cari=$_POST['cari'];
                    $query = mysqli_query($koneksi,"SELECT * FROM data_admin WHERE nama LIKE '$cari%'");
                }else{
                    $query= mysqli_query($koneksi,"SELECT * FROM data_admin");
                }
                while ($data = mysqli_fetch_array($query)){
            ?>
                <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $data['id'];?></td>
                    <td><?php echo $data['nama'];?></td>
                    <td><?php echo $data['tempat'];?></td>
                    <td><?php echo $data['tanggal'];?></td>
                    <td><?php echo $data['agama'];?></td>
                    <td><?php echo $data['jenis'];?></td>
                    <td><?php echo $data['alamat'];?></td>
                    <td><?php echo $data['tlp'];?></td>
                </tr>
            <?php
                }
            ?>
</table>