@extends('admin.layouts.app_admin')


@section('content')


    <div class="container">
        <h2 class="text-center mb-5">Категории</h2>
        <table class="table table-striped mb-5">
            <thead>
            <tr>
                <th scope="col">id</th>

                <th scope="col">title</th>

                <th class="text-right" scope="col"><a href="{{route('admin.category.create')}}"><i class="fas fa-plus mr-3"></i></a>Действие</th>        </tr>
            </thead>
            <tbody>
            @forelse($categories as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>

                    <td>{{ $category->title }}</td>

                    <td class="text-right">
                        <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false}" action="{{ route('admin.category.destroy', $category) }}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            {{ csrf_field() }}
                            <a href="{{ route('admin.category.edit', $category) }}" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a>
                            <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
                </tr>
            @endforelse
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination text-right">
                        {{ $categories->links() }}
                    </ul>
                </td>
            </tr>
            </tfoot>
        </table>


        <div class="container">
            <h2 class="text-center mb-5">Товары</h2>
            <table class="table table-striped mb-5">
                <thead>
                <tr>
                    <th scope="col">id</th>

                    <th scope="col">title</th>

                    <th class="text-right" scope="col"><a href="{{route('admin.product.create')}}"><i class="fas fa-plus mr-3"></i></a>Действие</th>        </tr>
                </thead>
                <tbody>
                @forelse($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>

                        <td>{{ $product->title }}</td>

                        <td class="text-right">
                            <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false}" action="{{ route('admin.product.destroy', $product) }}" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                {{ csrf_field() }}
                                <a href="{{ route('admin.product.edit', $product) }}" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a>
                                <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
                    </tr>
                @endforelse
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="3">
                        <ul class="pagination text-right">
                            {{ $products->links() }}
                        </ul>
                    </td>
                </tr>
                </tfoot>
            </table>


<div class="container">
    <h2 class="text-center mb-5">Акции</h2>
    <table class="table table-striped mb-5">
        <thead>
        <tr>
            <th scope="col">id</th>

            <th scope="col">title</th>

            <th class="text-right" scope="col"><a href="{{route('admin.stock.create')}}"><i class="fas fa-plus mr-3"></i></a>Действие</th>        </tr>
        </thead>
        <tbody>
        @forelse($stocks as $stock)
            <tr>
                <th scope="row">{{ $stock->id }}</th>

                <td>{{ $stock->title }}</td>

                <td class="text-right">
                    <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false}" action="{{ route('admin.stock.destroy', $stock) }}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field() }}
                        <a href="{{ route('admin.stock.edit', $stock) }}" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a>
                        <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
            </tr>
        @endforelse
        </tbody>
        <tfoot>
        <tr>
            <td colspan="3">
                <ul class="pagination text-right">
                    {{ $stocks->links() }}
                </ul>
            </td>
        </tr>
        </tfoot>
    </table>


    <h2 class="text-center mb-5">Новости</h2>
    <table class="table table-striped mb-5">
        <thead>
        <tr>
            <th scope="col">id</th>

            <th scope="col">title</th>

            <th class="text-right" scope="col"><a href="{{route('admin.event.create')}}"><i class="fas fa-plus mr-3"></i></a>Действие</th>        </tr>
        </thead>
        <tbody>
        @forelse($events as $event)
            <tr>
                <th scope="row">{{ $event->id }}</th>

                <td>{{ $event->title }}</td>

                <td class="text-right">
                    <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false}" action="{{ route('admin.event.destroy', $event) }}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field() }}
                        <a href="{{ route('admin.event.edit', $event) }}" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a>
                        <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
            </tr>
        @endforelse
        </tbody>
        <tfoot>
        <tr>
            <td colspan="3">
                <ul class="pagination text-right">
                    {{ $events->links() }}
                </ul>
            </td>
        </tr>
        </tfoot>
    </table>
    <h2 class="text-center mb-5">Отзывы</h2>
    <table class="table table-striped mb-5">
        <thead>
        <tr>
            <th scope="col">id</th>

            <th scope="col">Дата</th>
            <th scope="col">ФИО</th>

            <th class="text-right" scope="col"><a href="{{route('admin.work.create')}}"><i class="fas fa-plus mr-3"></i></a>Действие</th>        </tr>
        </thead>
        <tbody>
        @forelse($works as $work)
            <tr>
                <th scope="row">{{ $work->id }}</th>

                <td>{{ $work->description }}</td>
                <td>{{ $work->title }}</td>

                <td class="text-right">
                    <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false}" action="{{ route('admin.work.destroy', $work) }}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field() }}
                        <a href="{{ route('admin.work.edit', $work) }}" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a>
                        <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4" class="text-center"><h2>Данные отсутствуют</h2></td>
            </tr>
        @endforelse
        </tbody>
        <tfoot>
        <tr>
            <td colspan="4">
                <ul class="pagination text-right">
                    {{ $works->links() }}
                </ul>
            </td>
        </tr>
        </tfoot>
    </table>
</div>
@endsection
