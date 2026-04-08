<h1>New product</h1>

<form action="" method="post" enctype="multipart/form-data">

    <div class="mb-3">
        <label for="picture" class="form-label">Image</label>
        <input id="picture" type="file" name="picture" class="form-control"
               placeholder="Choisissez une image" accept="image/*">
    </div>

    <div class="mb-3">
        <label for="title" class="form-label">Titre</label>
        <input id="title" type="text" name="title" class="form-control"
               placeholder="Saissisez un titre" required minlength="4" maxlength="15">
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input id="price" type="number" name="price" class="form-control"
               placeholder="Saissisez un prix" required minlength="1" maxlength="4">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" id="description" class="form-control" cols="30" rows="10"
                  placeholder="Saisissez une description" style="resize: none;" required minlength="5" maxlength="155" >

        </textarea>
    </div>

    <button type="submit" class="btn btn-primary">Créer</button>

</form>
