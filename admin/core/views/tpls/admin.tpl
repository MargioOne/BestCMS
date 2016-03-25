<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="http://bestcms/admin/core/views/tpls/styles/style.css">
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
</div>
<div class="clear"></div>
</div>
<div id="container">
    <div class="tabs">
        <input id="tab1" type="radio" name="tabs" checked>
        <label for="tab1">Config</label>

        <input id="tab2" type="radio" name="tabs">
        <label for="tab2">Add article</label>

        <input id="tab3" type="radio" name="tabs">
        <label for="tab3">Add contact</label>

        <input id="tab4" type="radio" name="tabs">
        <label for="tab4">Add image</label>

        <section id="content1">
            <form action="" method="get" name="config">
                <table class="tabel">
                    <tr class="row1">
                        <td class="id1">Count of articles on page</td>
                        <td class="id2"><input name="count_articles" type="number" min="1" max="8"></td>
                    </tr>
                    <tr class="row2">
                        <td class="id1">Count of symbol on description</td>
                        <td class="id2"><input name="count_symbol" type="number" min="400" max="1000" step="100"></td>
                    </tr>
                    <tr class="row3">
                        <td class="id1">Site name</td>
                        <td class="id2"><input name="site_name" type="text"></td>
                    </tr>
                    <tr class="row4">
                        <td class="id1">Copyrate</td>
                        <td class="id2"><input name="site_copyrate" type="text"></td>
                    </tr>
                    <tr class="row5">
                        <td class="id1" colspan="2"><input type="submit" value="save"></td>
                    </tr>
                </table>
            </form>
        </section>
        <section id="content2">
            <form action="" method="get" name="addarticle">
                <div class="area_of_content">

                    <div class="title_admin">
                        <input type="text" id="dfg87" placeholder="Article title">
                    </div>
                    <div class="fulltext_admin">
                        <textarea placeholder="Article text" cols="70" rows="10" name="fulltext" id="dfg88"></textarea>
                    </div>
                    <div class="descrinption_admin">
                        <textarea cols="70" rows="10" name="desctext" id="dfg89"
                                  placeholder="Article description"></textarea>
                    </div>
                    <div class="user_admin">
                        <div class="set1">
                            <input type="text" id="dfg90" placeholder="User" name="user">
                        </div>
                        <div class="set2">
                            <select name="category" id="dfg91">
                                <option selected value="1">Internet</option>
                                <option value="2">Home</option>
                                <option value="3">Hobby</option>
                            </select>
                        </div>
                    </div>
                    <div class="add_art">
                        <input type="submit" id="dfg92" value="Add">
                    </div>
                </div>
            </form>
        </section>
        <section id="content3">
        </section>
        <section id="content4">
        </section>
    </div>
</div>
</body>
</html>