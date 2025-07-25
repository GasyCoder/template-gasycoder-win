@props([
    'rounded' => false,
    'size'=> 'rg',
    'variant'=> 'primary',
    'image',
    'text',
    // 'customVariant'=> false,
])

<div @class([
    "relative flex-shrink-0 flex items-center justify-center rounded-full font-medium",
    "rounded-md"=> !$rounded,
    "rounded-full"=> $rounded,
    "text-[9px] h-6 w-6"=> $size == "xs",
    "text-xs h-7 w-7"=> $size == "mb",
    "text-xs h-8 w-8"=> $size == "sm",
    "text-sm h-10 w-10"=> $size == "rg",
    "text-sm h-12 w-12"=> $size == "lg",
    "text-xl h-16 w-16"=> $size == "xl",
    "text-3xl h-20 w-20"=> $size == "2xl",
    "text-5xl h-28 w-28"=> $size == "3xl",
    "text-white bg-primary-600" => $variant == "primary",
    "bg-primary-100 dark:bg-primary-950 text-primary-600" => $variant == "primary-pale",
    "text-white bg-slate-900" => $variant == "secondary",
    "bg-slate-100 dark:bg-slate-900 text-slate-900 dark:text-slate-100" => $variant == "secondary-pale",
    "text-white bg-yellow-600" => $variant == "yellow",
    "bg-yellow-100 dark:bg-yellow-950 text-yellow-600" => $variant == "yellow-pale",
    "text-white bg-red-600" => $variant == "red",
    "bg-red-100 dark:bg-red-950 text-red-600" => $variant == "red-pale",
    "text-white bg-green-600" => $variant == "green",
    "bg-green-100 dark:bg-green-950 text-green-600" => $variant == "green-pale",
    "text-white bg-cyan-600" => $variant == "cyan",
    "bg-cyan-100 dark:bg-cyan-950 text-cyan-600" => $variant == "cyan-pale",
    "text-white bg-blue-600" => $variant == "blue",
    "bg-blue-100 dark:bg-blue-950 text-blue-600" => $variant == "blue-pale",
    "text-white bg-pink-600" => $variant == "pink",
    "bg-pink-100 dark:bg-pink-950 text-pink-600" => $variant == "pink-pale",
    "text-white bg-indigo-600" => $variant == "indigo",
    "bg-indigo-100 dark:bg-indigo-950 text-indigo-600" => $variant == "indigo-pale",
    "text-white bg-black" => $variant == "black",
    "bg-gray-200 dark:bg-gray-800 text-black dark:text-white" => $variant == "black-pale",
    "text-white bg-slate-600" => $variant == "slate",
    "bg-slate-100 dark:bg-slate-950 text-slate-600" => $variant == "slate-pale",
    "text-slate-600 bg-gray-100" => $variant == "light",
    "text-white bg-orange-600" => $variant == "orange",
    "bg-orange-100 dark:bg-orange-950 text-orange-600" => $variant == "orange-pale",
    "text-white bg-purple-600" => $variant == "purple",
    "bg-purple-100 dark:bg-purple-950 text-purple-600" => $variant == "purple-pale",
    // $customVariant => $customVariant,
])>
    @if (isset($text))
        <span>{{$text}}</span>
    @endif
    @if (isset($image))
        <img @class(["rounded-md"=> !$rounded, "rounded-full"=> $rounded,]) src={{$image}} alt=""/>
    @endif
    @if (isset($slot))
        {{$slot}}
    @endif
</div>