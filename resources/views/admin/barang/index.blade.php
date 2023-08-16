<x-admin-layout>
    <section class="section">
        <div class="section-header">
            <h1>Table</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
                <div class="breadcrumb-item">Table</div>
            </div>
        </div>

        <div class="section-body">
            @if (session('status'))
                <div class="alert alert-success alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>×</span>
                        </button>
                        {{ session('status') }}
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-body p-2">
                            <div class="d-flex mt-1 mb-3 mx-2 justify-content-between">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="rounded border border-1 px-2 py-1"
                                            placeholder="Search">
                                    </div>
                                </form>
                                <div>
                                    <span>Status:
                                        <select class="border border-0" name="status" id="status">
                                            <option value="Active">Active</option>
                                            <option value="In Active">In Active</option>
                                            <option value="Scheduled">Scheduled</option>
                                        </select>
                                    </span>

                                    <a href="{{ route('tambah-barang') }}" class="btn btn-info ml-4">Add Product</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup"
                                                        data-checkbox-role="dad" class="custom-control-input"
                                                        id="checkbox-all">
                                                    <label for="checkbox-all"
                                                        class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </th>
                                            <th>Product</th>
                                            <th>QTY</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($barang as $item)
                                            <tr>
                                                <td class="p-0 text-center">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup"
                                                            class="custom-control-input"
                                                            id="checkbox-{{ $item->id }}">
                                                        <label for="checkbox-{{ $item->id }}"
                                                            class="custom-control-label">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td class="py-3">
                                                    <img src="{{ asset('storage/' . $item->image) }}" alt=""
                                                        width="60" height="60">
                                                    {{ $item->name }}

                                                </td>
                                                <td>
                                                    {{ $item->qty }}
                                                </td>
                                                <td>Rp. {{ number_format($item->price, 0) }}</td>

                                                <td>
                                                    <a href="{{ route('edit-barang', $item->id) }}"
                                                        class="btn btn-warning">
                                                        <i class="fas fa-pen"></i>
                                                    </a>
                                                    <a href="{{ route('destroy-barang', $item->id) }}"
                                                        class="btn btn-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-admin-layout>
