<style>    table {        font-family: arial, sans-serif;        border-collapse: collapse;        width: 100%;    }    td, th {        border: 1px solid #dddddd;        text-align: left;        padding: 8px;    }    tr:nth-child(even) {        background-color: #dddddd;    }</style><table>    <tr>        <th>Category name </th>        <th>Delete</th>        <th>Edit</th>    </tr>    <?php   foreach ($categories as $categorie) { ?>    <tr>        <td><?= $categorie['name']; ?></td>        <td> <?= '<a class="categoryLink" href="/category/deleteCategory?categoryId=' . $categorie['id'] . '"><li>' . 'Delete ' .$categorie['name'] . '</li></a>'; ?></td>        <td> <?= '<a class="categoryLink" href="/category/editCategory?categoryId=' . $categorie['id'] . '"><li>' . 'Edit ' .$categorie['name'] . '</li></a>'; ?></td>    </tr>    <?php } ?></table><td> <?= '<a class="categoryLink" href="/category/addCategory"><li>' . 'Add category' . '</li></a>'; ?></td>