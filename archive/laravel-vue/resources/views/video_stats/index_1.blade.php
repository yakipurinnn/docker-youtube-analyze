<!--resorceファイル内のvue.jsを反映させるときはnpm run dev をcmdで行う
v-bind で渡す際はケバブケース(aaa-bbb)
vue側で受け取る場合はキャメルケースで指定する(aaaBbb)
参考元: https://tech.manafukurou.com/article/laravel8-vue-param/
table header固定の参考元: https://lv1meg.hatenablog.com/entry/2020/05/03/080558
-->

@extends('layouts/template')
@section('head')
    @component('layouts/head')
    @endcomponent
@endsection
@section('content')

<div id="app">
    
    <menubar></menubar>
    <sample></sample>
    <video-table></video-table>
    <next-page></next-page>
</div>

@endsection


