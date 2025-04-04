<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute باید پذیرفته شده باشد.',
    'accepted_if' => 'The :attribute field must be accepted when :other is :value.',
    'active_url'           => 'آدرس :attribute معتبر نیست.',
    'after'                => ':attribute باید تاریخی بعد از :date باشد.',
    'after_or_equal'       => ':attribute باید تاریخی بعد از :date، یا مطابق با آن باشد.',
    'alpha'                => ':attribute باید فقط حروف الفبا باشد.',
    'alpha_dash'           => ':attribute باید فقط حروف الفبا، اعداد، خط تیره و زیرخط باشد.',
    'alpha_num'            => ':attribute باید فقط حروف الفبا و اعداد باشد.',
    'array'                => ':attribute باید آرایه باشد.',
    'ascii' => 'The :attribute field must only contain single-byte alphanumeric characters and symbols.',
    'before_or_equal'      => ':attribute باید تاریخی قبل از :date، یا مطابق با آن باشد.',
    'between'              => [
        'numeric' => ':attribute باید بین :min و :max باشد.',
        'file'    => ':attribute باید بین :min و :max کیلوبایت باشد.',
        'string'  => ':attribute باید بین :min و :max کاراکتر باشد.',
        'array'   => ':attribute باید بین :min و :max آیتم باشد.',
    ],
    'boolean'              => 'فیلد :attribute فقط می‌تواند true و یا false باشد.',
    'can' => 'The :attribute field contains an unauthorized value.',
    'confirmed'            => ':attribute با فیلد تکرار مطابقت ندارد.',
    'contains' => 'The :attribute field is missing a required value.',
    'current_password' => 'The password is incorrect.',
    'date'                 => ':attribute یک تاریخ معتبر نیست.',
    'date_equals'          => ':attribute باید یک تاریخ برابر با تاریخ :date باشد.',
    'date_format'          => ':attribute با الگوی :format مطابقت ندارد.',
    'decimal' => 'The :attribute field must have :decimal decimal places.',
    'declined' => 'The :attribute field must be declined.',
    'declined_if' => 'The :attribute field must be declined when :other is :value.',
    'different'            => ':attribute و :other باید از یکدیگر متفاوت باشند.',
    'digits'               => ':attribute باید :digits رقم باشد.',
    'digits_between'       => ':attribute باید بین :min و :max رقم باشد.',
    'dimensions'           => 'ابعاد تصویر :attribute قابل قبول نیست.',
    'distinct'             => 'فیلد :attribute مقدار تکراری دارد.',
    'doesnt_end_with' => 'The :attribute field must not end with one of the following: :values.',
    'doesnt_start_with' => 'The :attribute field must not start with one of the following: :values.',
    'email'                => ':attribute باید یک ایمیل معتبر باشد.',
    'ends_with'            => 'فیلد :attribute باید با یکی از مقادیر زیر خاتمه یابد: :values',
    'enum' => 'The selected :attribute is invalid.',
    'exists'               => ':attribute انتخاب شده، معتبر نیست.',
    'extensions' => 'The :attribute field must have one of the following extensions: :values.',
    'file'                 => ':attribute باید یک فایل معتبر باشد.',
    'filled'               => 'فیلد :attribute باید مقدار داشته باشد.',
    'gt'                   => [
        'numeric' => ':attribute باید بزرگتر از :value باشد.',
        'file'    => ':attribute باید بزرگتر از :value کیلوبایت باشد.',
        'string'  => ':attribute باید بیشتر از :value کاراکتر داشته باشد.',
        'array'   => ':attribute باید بیشتر از :value آیتم داشته باشد.',
    ],
    'gte'                  => [
        'numeric' => ':attribute باید بزرگتر یا مساوی :value باشد.',
        'file'    => ':attribute باید بزرگتر یا مساوی :value کیلوبایت باشد.',
        'string'  => ':attribute باید بیشتر یا مساوی :value کاراکتر داشته باشد.',
        'array'   => ':attribute باید بیشتر یا مساوی :value آیتم داشته باشد.',
    ],
    'hex_color' => 'The :attribute field must be a valid hexadecimal color.',
    'image'                => ':attribute باید یک تصویر معتبر باشد.',
    'in'                   => ':attribute انتخاب شده، معتبر نیست.',
    'in_array'             => 'فیلد :attribute در لیست :other وجود ندارد.',
    'integer'              => ':attribute باید عدد صحیح باشد.',
    'ip'                   => ':attribute باید آدرس IP معتبر باشد.',
    'ipv4'                 => ':attribute باید یک آدرس معتبر از نوع IPv4 باشد.',
    'ipv6'                 => ':attribute باید یک آدرس معتبر از نوع IPv6 باشد.',
    'json'                 => 'فیلد :attribute باید یک رشته از نوع JSON باشد.',
    'list' => 'The :attribute field must be a list.',
    'lowercase' => 'The :attribute field must be lowercase.',
    'lt'                   => [
        'numeric' => ':attribute باید کوچکتر از :value باشد.',
        'file'    => ':attribute باید کوچکتر از :value کیلوبایت باشد.',
        'string'  => ':attribute باید کمتر از :value کاراکتر داشته باشد.',
        'array'   => ':attribute باید کمتر از :value آیتم داشته باشد.',
    ],
    'lte'                  => [
        'numeric' => ':attribute باید کوچکتر یا مساوی :value باشد.',
        'file'    => ':attribute باید کوچکتر یا مساوی :value کیلوبایت باشد.',
        'string'  => ':attribute باید کمتر یا مساوی :value کاراکتر داشته باشد.',
        'array'   => ':attribute باید کمتر یا مساوی :value آیتم داشته باشد.',
    ],
    'mac_address' => 'The :attribute field must be a valid MAC address.',
    'max'                  => [
        'numeric' => ':attribute نباید بزرگتر از :max باشد.',
        'file'    => ':attribute نباید بزرگتر از :max کیلوبایت باشد.',
        'string'  => ':attribute نباید بیشتر از :max کاراکتر داشته باشد.',
        'array'   => ':attribute نباید بیشتر از :max آیتم داشته باشد.',
    ],
    'max_digits' => 'The :attribute field must not have more than :max digits.',
    'mimes'                => 'فرمت‌های معتبر فایل عبارتند از: :values.',
    'mimetypes'            => 'فرمت‌های معتبر فایل عبارتند از: :values.',
    'min'                  => [
        'numeric' => ':attribute نباید کوچکتر از :min باشد.',
        'file'    => ':attribute نباید کوچکتر از :min کیلوبایت باشد.',
        'string'  => ':attribute نباید کمتر از :min کاراکتر داشته باشد.',
        'array'   => ':attribute نباید کمتر از :min آیتم داشته باشد.',
    ],
    'min_digits' => 'The :attribute field must have at least :min digits.',
    'missing' => 'The :attribute field must be missing.',
    'missing_if' => 'The :attribute field must be missing when :other is :value.',
    'missing_unless' => 'The :attribute field must be missing unless :other is :value.',
    'missing_with' => 'The :attribute field must be missing when :values is present.',
    'missing_with_all' => 'The :attribute field must be missing when :values are present.',
    'multiple_of'          => 'مقدار :attribute باید مضربی از :value باشد.',
    'not_in'               => ':attribute انتخاب شده، معتبر نیست.',
    'not_regex'            => 'فرمت :attribute معتبر نیست.',
    'numeric'              => ':attribute باید عدد یا رشته‌ای از اعداد باشد.',
    'password' => [
        'letters' => 'The :attribute field must contain at least one letter.',
        'mixed' => 'The :attribute field must contain at least one uppercase and one lowercase letter.',
        'numbers' => 'The :attribute field must contain at least one number.',
        'symbols' => 'The :attribute field must contain at least one symbol.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present'              => 'فیلد :attribute باید در پارامترهای ارسالی وجود داشته باشد.',
    'present_if' => 'The :attribute field must be present when :other is :value.',
    'present_unless' => 'The :attribute field must be present unless :other is :value.',
    'present_with' => 'The :attribute field must be present when :values is present.',
    'present_with_all' => 'The :attribute field must be present when :values are present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex'                => 'فرمت :attribute معتبر نیست.',
    'required'             => 'فیلد :attribute الزامی است.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if'          => 'هنگامی که :other برابر با :value است، فیلد :attribute الزامی است.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_if_declined' => 'The :attribute field is required when :other is declined.',
    'required_unless'      => 'فیلد :attribute الزامی است، مگر آنکه :other در :values موجود باشد.',
    'required_with'        => 'در صورت وجود فیلد :values، فیلد :attribute نیز الزامی است.',
    'required_with_all'    => 'در صورت وجود فیلدهای :values، فیلد :attribute نیز الزامی است.',
    'required_without'     => 'در صورت عدم وجود فیلد :values، فیلد :attribute الزامی است.',
    'required_without_all' => 'در صورت عدم وجود هر یک از فیلدهای :values، فیلد :attribute الزامی است.',
    'same'                 => ':attribute و :other باید همانند هم باشند.',
    'size'                 => [
        'numeric' => ':attribute باید برابر با :size باشد.',
        'file'    => ':attribute باید برابر با :size کیلوبایت باشد.',
        'string'  => ':attribute باید برابر با :size کاراکتر باشد.',
        'array'   => ':attribute باید شامل :size آیتم باشد.',
    ],
    'starts_with'          => ':attribute باید با یکی از این ها شروع شود: :values',
    'string'               => 'فیلد :attribute باید متن باشد.',
    'timezone'             => 'فیلد :attribute باید یک منطقه زمانی معتبر باشد.',
    'unique'               => ':attribute قبلا انتخاب شده است.',
    'uploaded'             => 'بارگذاری فایل :attribute موفقیت آمیز نبود.',
    'uppercase' => 'The :attribute field must be uppercase.',
    'url'                  => ':attribute معتبر نمی‌باشد.',
    'uuid'                 => ':attribute باید یک UUID معتبر باشد.',
    'ulid' => 'The :attribute field must be a valid ULID.',


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

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'name'                  => 'نام',
        'username'              => 'نام کاربری',
        'email'                 => 'ایمیل',
        'first_name'            => 'نام',
        'last_name'             => 'نام خانوادگی',
        'password'              => 'رمز عبور',
        'password_confirmation' => 'تکرار رمز عبور',
        'city'                  => 'شهر',
        'country'               => 'کشور',
        'address'               => 'نشانی',
        'phone'                 => 'شماره همراه',
        'mobile'                => 'شماره همراه',
        'age'                   => 'سن',
        'sex'                   => 'جنسیت',
        'gender'                => 'جنسیت',
        'day'                   => 'روز',
        'month'                 => 'ماه',
        'year'                  => 'سال',
        'hour'                  => 'ساعت',
        'minute'                => 'دقیقه',
        'second'                => 'ثانیه',
        'title'                 => 'عنوان',
        'text'                  => 'متن',
        'content'               => 'محتوا',
        'description'           => 'توضیحات',
        'excerpt'               => 'گزیده مطلب',
        'date'                  => 'تاریخ',
        'time'                  => 'زمان',
        'available'             => 'موجود',
        'size'                  => 'اندازه',
        'terms'                 => 'شرایط',
        'province'              => 'استان',
    ],

];
