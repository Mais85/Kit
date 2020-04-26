@extends('layouts.admin')
@section('title',' | '.$title)

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="u-mb-xsmall" style="float:right;">
                <div class="c-dropdown dropdown">
                    <a href="#" class="c-btn c-btn--info has-icon dropdown-toggle" id="dropdownMenuToggleModal" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                        Hərəkətlər <i class="c-btn__icon feather icon-chevron-down"></i>
                    </a>

                    <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuToggleModal">
                        <a class="c-dropdown__item dropdown-item" href="javascript:;" onclick="massDelete('news')">Seçili Olanları Sil</a>
                        <a class="c-dropdown__item dropdown-item" href="">Səhifəni Yenilə</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="c-table-responsive@wide">
                <table class="c-table">
                    <thead class="c-table__head">
                    <tr class="c-table__row">
                        <th class="c-table__cell c-table__cell--head">
                            <div class="c-choice c-choice--checkbox">
                                <input class="c-choice__input" id="checkAll" type="checkbox">
                                <label class="c-choice__label" for="checkAll"> </label>
                            </div>
                        </th>
                        <th class="c-table__cell c-table__cell--head">ID</th>
                        <th class="c-table__cell c-table__cell--head">Xəbərin adı</th>
                        <th class="c-table__cell c-table__cell--head">Dərc olunub ?</th>
                        <th class="c-table__cell c-table__cell--head">Redaktə Edildi</th>
                        <th class="c-table__cell c-table__cell--head">Hərəkətlər</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($items as $item)
                        <tr class="c-table__row">
                            <td class="c-table__cell">
                                <div class="c-choice c-choice--checkbox">
                                    <input class="c-choice__input" id="id{{$item->id}}" name="ids[]" value="{{$item->id}}" type="checkbox">
                                    <label class="c-choice__label" for="id{{$item->id}}" > </label>
                                </div>

                            </td>
                            <td class="c-table__cell">#{{$item->id}}</td>
                            <th class="c-table__cell">{{$item->title}}</th>
                           @if($item->isPublished ==1)
                                <th class="c-table__cell"><a class="c-badge c-badge--small c-badge--success c-tooltip c-tooltip--top" aria-label=".{{ $item->isPublished }}.">Aktiv</a></th>
                            @else
                               <th class="c-table__cell"><a class="c-badge c-badge--small c-badge--danger c-tooltip c-tooltip--top" aria-label=".{{ $item->isPublished }}.">Deaktiv</a></th>
                           @endif
                            <th class="c-table__cell">{{$item->updated_at}}</th>
                            <td class="c-table__cell">
                                <div class="c-dropdown dropdown">
                                    <a href="#" class="c-btn c-btn--info has-icon dropdown-toggle" id="dropdownMenuTable1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Göstər <i class="feather icon-chevron-down"></i>
                                    </a>
                                    <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuTable1">
                                        <a class="c-dropdown__item dropdown-item" href="/admin/news/edit/@if(isset($item->slug)){{$item->getTranslation('slug',\App::getlocale(),false)}}@endif/{{$item->id}}" >Redaktə Et</a>
                                        <a class="c-dropdown__item dropdown-item" href="javascript:;" onclick="confirm_delete('/admin/news/delete/{{$item->id}}')">Sil</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{$items->appends(request()->input())->links('pagination.admin')}}
@endsection

