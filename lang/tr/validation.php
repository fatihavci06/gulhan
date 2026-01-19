<?php

return array(
    /*
      |--------------------------------------------------------------------------
      | Validation Language Lines
      |--------------------------------------------------------------------------
      |
      | The following language lines contain the default error messages used by
      | the validator class. Some of these rules have multiple versions such
      | such as the size rules. Feel free to tweak each of these messages.
      |
     */

    "accepted" => "kabul edilmelidir.",
    "active_url" => "geçerli bir URL olmalıdır.",
    "after" => "şundan daha eski bir tarih olmalıdır :date.",
    "alpha" => "sadece harflerden oluşmalıdır.",
    "alpha_dash" => "sadece harfler, rakamlar ve tirelerden oluşmalıdır.",
    "alpha_num" => "sadece harfler ve rakamlar içermelidir.",
    "array" => "dizi olmalıdır.",
    "before" => "şundan daha önceki bir tarih olmalıdır :date.",
    "between" => array(
        "numeric" => ":min - :max arasında olmalıdır.",
        "file" => ":min - :max arasındaki kilobayt değeri olmalıdır.",
        "string" => ":min - :max arasında karakterden oluşmalıdır.",
        "array" => ":min - :max arasında nesneye sahip olmalıdır."
    ),
    "confirmed" => "tekrarı eşleşmiyor.",
    "date" => "geçerli bir tarih olmalıdır.",
    "date_format" => ":format biçimi ile eşleşmiyor.",
    "different" => "ile :other birbirinden farklı olmalıdır.",
    "digits" => ":digits rakam olmalıdır.",
    "digits_between" => ":min ile :max arasında rakam olmalıdır.",
    "email" => "biçimi geçersiz.",
    "exists" => "Seçili geçersiz.",
    "image" => "alanı resim dosyası olmalıdır.",
    "in" => "değeri geçersiz.",
    "integer" => "rakam olmalıdır.",
    "ip" => "geçerli bir IP adresi olmalıdır.",
    "max" => array(
        "numeric" => "değeri :max değerinden küçük olmalıdır.",
        "file" => "değeri :max kilobayt değerinden küçük olmalıdır.",
        "string" => "değeri :max karakter değerinden küçük olmalıdır.",
        "array" => "değeri :max adedinden az nesneye sahip olmalıdır."
    ),
    "mimes" => "dosya biçimi :values olmalıdır.",
    "min" => array(
        "numeric" => "değeri :min değerinden büyük olmalıdır.",
        "file" => "değeri :min kilobayt değerinden büyük olmalıdır.",
        "string" => "değeri :min karakter değerinden büyük olmalıdır.",
        "array" => "en az :min nesneye sahip olmalıdır."
    ),
    "not_in" => "Seçili geçersiz.",
    "numeric" => "rakam olmalıdır.",
    "regex" => "biçimi geçersiz.",
    "required" => "Boş bırakılamaz.",
    "required_if" => "alanı, :other :value değerine sahip olduğunda zorunludur.",
    "required_with" => "alanı :values varken zorunludur.",
    "required_with_all" => "alanı :values varken zorunludur.",
    "required_without" => "alanı :values yokken zorunludur.",
    "required_without_all" => "alanı :values yokken zorunludur.",
    "same" => "ile :other eşleşmelidir.",
    "size" => array(
        "numeric" => ":size olmalıdır.",
        "file" => ":size kilobyte olmalıdır.",
        "string" => ":size karakter olmalıdır.",
        "array" => ":size nesneye sahip olmalıdır."
    ),
    "unique" => "daha önceden kayıt edilmiş.",
    "url" => "biçimi geçersiz.",
    /*
      |--------------------------------------------------------------------------
      | Custom Validation Language Lines
      |--------------------------------------------------------------------------
      |
      | Here you may specify custom validation messages for attributes using the
      | convention "attribute.rule" to name the lines. This makes it quick to
      | specify a specific custom language line for a given attribute rule.
      |
     */
    'custom' => array(),
    /*
      |--------------------------------------------------------------------------
      | Custom Validation Attributes
      |--------------------------------------------------------------------------
      |
      | The following language lines are used to swap attribute place-holders
      | with something more reader friendly such as E-Mail Address instead
      | of "email". This simply helps us make messages a little cleaner.
      |
     */
    'attributes' => array(),
);
