<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>{{ $title }}</h1>
                    </div>
                </div>
            </div>

            @php
                $links = explode('/', $paths);
                $count = count($links);
                $url = '/';
            @endphp

            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            @for ($i=0; $i < $count; $i++ )
                                @php $url .= $links[$i].'/' @endphp
                                @if ($i != ($count-1))
                                    <li><a href="{{ $url }}">{{ $links[$i] }}</a></li>
                                @else
                                    <li class="active">{{ $links[$i] }}</li>
                                @endif
                            @endfor
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
