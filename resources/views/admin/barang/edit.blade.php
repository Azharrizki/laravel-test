<x-admin-layout>
    <section class="section">
        <form action="{{ route('update-barang', $barang->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="section-header d-flex justify-content-between">
                <h1>Edit Barang</h1>
                <button class="btn btn-success" type="submit">Update</button>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <img id="thumbnail" src="{{ asset('storage/' . $barang->image) }}" alt="Thumbnail"
                                        width="100%" height="400">
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Product</label>
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Masukan nama product" value="{{ $barang->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Upload</label>
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="imageInput">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Deskripsi Product</label>
                                    <textarea name="description" id="summernote">{{ $barang->description }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Price</label>
                                    <input type="number" name="price" class="form-control"
                                        placeholder="Masukan harga" value="{{ $barang->price }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Quantity</label>
                                    <input type="number" name="qty" class="form-control"
                                        placeholder="Masukan quantity" value="{{ $barang->qty }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </section>
</x-admin-layout>

<script>
    document.getElementById('imageInput').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const reader = new FileReader();

        reader.onload = function(e) {
            const thumbnail = document.getElementById('thumbnail');
            thumbnail.src = e.target.result;
        };

        reader.readAsDataURL(file);
    });
</script>
