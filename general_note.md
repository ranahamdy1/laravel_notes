## ⚡ 1-  if i have (cart & product):

![cart_product](images/cart_product.png)

- cart need product
- cart has forign key(product_id)
- one product can be found in many cart (one to many)
- cart has one product (one to one)
- we take big relation (one to many)
- إذن في Laravel Models:
```
in Cart.php:
public function product()
{
    return $this->belongsTo(Product::class);
}
```
```
in Product.php:
public function carts()
{
    return $this->hasMany(Cart::class);
}
```
- ال belongsTo يتحط في الـ Model اللي بيحتوي على الـ foreign key.
- ال hasMany يتحط في الـ Model اللي بيتم الإشارة ليه بالـ foreign key.

## ⚡ 2-  Eager Loading
- في Laravel معناها إنك تجيب البيانات الأساسية مع البيانات المرتبطة بيها في نفس الاستعلام بدل ما تعمل استعلام لكل علاقة لوحدها.
- لأن في العادة، لو عندك موديل Cart مرتبط بموديل Product، وإنت جبت كل الـ carts كده:
```
$carts = Cart::all();
```
- في الحالة دي Laravel هيعمل:
- 1- استعلام أول يجيب كل الـ carts.
- 2- وبعدين استعلام لكل cart عشان يجيب الـ product الخاص بيه (دي مشكلة اسمها N+1 Problem).
- لو عندك 100 cart → هيعمل استعلام + 100 استعلام زيادة! 💥
> ✅ Eager Loading بتحل المشكلة دي إزاي؟
- بنستخدم with() بالشكل ده:
```
$carts = Cart::with('product')->get();
```
- ده بيعمل:
- 1- استعلام أول يجيب كل الـ carts.
- 2- واستعلام تاني واحد بس يجيب كل الـ products المرتبطة بيهم.
- يعني وفرنا استعلامات كتير وسرعنا الأداء.
> ✅ إيه المطلوب عشان تشتغل؟
- لازم في Cart model يكون عندك علاقة بالشكل ده:
```
public function product()
{
    return $this->belongsTo(Product::class);
}
```
## ⚡ 3-  Session
- هي آلية لتخزين البيانات بين الطلبات (HTTP Requests) بحيث تظل متاحة للمستخدم طوال فترة الجلسة.
```
Session::put('user_name', 'ahmed');
```
