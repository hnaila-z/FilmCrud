<?php
class View {
    public function listData($data) {
        echo '<h1>Daftar Film</h1>';
        echo '<a href="?page=add">Tambah Film</a>';
        echo '<table border="1" cellpadding="5" cellspacing="0">';
        echo '<tr><th>ID</th><th>Judul</th><th>Sutradara</th><th>Aksi</th></tr>';
        foreach ($data as $film) {
            echo "<tr>
                    <td>{$film['id']}</td>
                    <td>{$film['title']}</td>
                    <td>{$film['director']}</td>
                    <td><a href='?page=delete&id={$film['id']}'>Hapus</a></td>
                  </tr>";
        }
        echo '</table>';
    }

    public function formAdd() {
        echo '<h1>Tambah Film</h1>';
        echo '<form method="post" action="?page=save">
                <label>Judul Film:</label><br>
                <input type="text" name="title" required><br><br>
                <label>Sutradara:</label><br>
                <input type="text" name="director" required><br><br>
                <button type="submit">Simpan</button>
              </form>';
    }
}
?>
