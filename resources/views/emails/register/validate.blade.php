@component('mail::message')
# 注册验证

> 尊敬的【{{ $name }}】用户您好！
> 请点击下面的按钮进行邮箱验证

@component('mail::button', ['url' => $url ])
点击我
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
