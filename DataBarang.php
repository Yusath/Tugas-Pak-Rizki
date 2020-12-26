<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>BARANG GUDANG</title>
</head>
<body>
<pre>
    <form method="POST" action="output.php">
                    **INPUT DATA BARANG**
            ==========================================
            Nama Barang :<input type="text" name="a"><br>
            Kode Barang :<select class="form-control" name="b">
                <option value="P001">P001</option>
                <option value="M001">M001</option>
                <option value="H001">H001</option></select><br>
            Merk        :<select class="form-control" name="c">
                <option value="ASUS">ASUS</option>
                <option value="ACER">ACER</option>
                <option value="LENOVO">LENOVO</option>
            </select><br>
            Prosessor   :<input type="radio" name="d" value='i3'/>i3
                         <input type="radio" name="d" value='i5'/>i5 <br>
            Fitur       :<input type="checkbox" name="e" value='vga'/>VGA
                         <input type="checkbox" name="e" value='ssd'/>SSD
                         <input type="checkbox" name="e" value='retina'/>Retina
        
            
            <input type="submit" value="Simpan"> <input type="reset" value="Batal">
    </form>
    </pre>
</body>
