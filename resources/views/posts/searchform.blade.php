<div class="col-sm-4 offset-sm-4  text-center ">
    <form action="{{ route('post.search', ['keyword' => $keyword]) }}" method="GET" class="py-3 form-inline justify-content-between flex-nowrap">
        <input type="text"  name="keyword" value="{{$keyword}}" class="form-control search-form w-100">
        <input type="submit" value="検索"  class="btn btn-light">
    </form>
</div>