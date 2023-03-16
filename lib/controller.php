<?php


$encoders = [
    "url", "email", "timestamp", "ascii", "binary", "base64", "md5", "hex", "morse", "sha1", "sha256", "sha512", "rot13", "uu", "caesar", "html"
];

$decoders = [
    "timestamp", "ascii", "binary", "base64", "hex", "morse", "rot13", "uu","caesar", "html"
];

$string = [
    "uppercase", "lowercase", "sentencecase", "alternatingcase", "capitalizedcase", "brainfuck", "flip"
];

$web = [
    "strip", "encode", "decode"
];

$numbers = [
    "btd", "dtb", "dth", "htd", "dto", "otd"
];

$list_types = [
    "nl", "s", "c", "pa", "json"
];

$lists = [
    "dupes", "flip"
];

$converters = [
    "bytes" => [ 
        "b" => "Bit", 
        "B" => "Byte", 
        "Gib" => "Gibibit",
        "kb" => "Kilobit", 
        "Mb" => "Megabit", 
        "Gb" => "Gigabit", 
        "Tb" => "Terabit", 
        "Kib" => "Kibibit", 
        "Mib" => "Mebibit", 
        "Tib" => "Tebibit", 
        "kB" => "Kilobyte", 
        "MB" => "Megabit", 
        "GB" => "Gigabyte", 
        "TB" => "Terabyte" 
    ],
    "length" => [ 
        "au" => "Astronomical Unit", 
        "cm" => "Centimetre", 
        "dm" => "Decimetre", 
        "ft" => "Foot", 
        "h" => "hand", 
        "in" => "Inch", 
        "km" => "Kilometre", 
        "ly" => "Lightyear", 
        "m" => "Metre", 
        "um" => "Micrometre", 
        "mi" => "Mile", 
        "mm" => "Millimetre", 
        "nm" => "Nanometre",
        "pc" => "Parsec", 
        "pm" => "Picometre", 
        "yd" => "Yard" 
    ],
    "mass" => [ 
        "kg" => "Kilogram", 
        "g" => "Gram", 
        "w/t" => "LongTon", 
        "mg" => "Milligram", 
        "N" => "Newton", 
        "oz" => "Ounce",
        "lb" => "Pound", 
        "ton" => "Ton", 
        "st" => "Stone", 
        "t" => "Tonne" 
    ],
    "temperature" => [ 
        "F" => "Fahrenheit", 
        "C" => "Celsius" 
    ],
    "volume" => [ 
        "cm3" => "Cubic Centimetre", 
        "m3" => "Cubic Metre", 
        "mm3" => "Cubic Millimetre", 
        "gal" => "Gallon", 
        "L" => "Litre", 
        "mL" => "Millilitre", 
        "pt" => "Pint" 
    ],
    "frequency" => [
        "GHz" => "Gigahertz",
        "Hz" => "Hertz",
        "kHz" => "Kilohertz",
        "MHz" => "Megahertz",
        "mHz" => "Millihertz",
        "THz" => "Terahertz" 
    ],
    "fuel" => [
        "km/l" => "Kilometre Per Litre",
        "L/100km" => "Litre Per Kilometres",
        "mpg" => "Miles Per Gallon" 
    ],
    "area" => [
        "acre" => "Acre",
        "ha" => "Hectare",
        "cm2" => "Square Centimetre",
        "ft2" => "Square Foot",
        "km2" => "Square Kilometre",
        "m2" => "Square Metre",
        "mi2" => "Square Mile",
        "mm2" => "Square Millimetre" 
    ],
    "energy" => [
        "cal" => "Calorie",
        "ft lbf" => "Foot Pound-force",
        "J" => "Joule",
        "kJ" => "Kilojoule",
        "kW h" => "Kilowatt Hour",
        "MeV" => "Megaelectronvolt",
        "MJ" => "Megajoule",
        "Nm" => "Newton Metre",
        "Wh" => "Watt Hour" 
    ],
    "pressure" => [
        "atm" => "Atmosphere",
        "bar" => "Bar",
        "hPa" => "Hectopascal",
        "inHg" => "Inches of Mercury",
        "kPa" => "Kilopascal",
        "mPa" => "Megapascal",
        "mbar" => "Millibar",
        "Pa" => "Pascal",
        "psi" => "pound-force per square inch",
        "Torr" => "Torr"
    ],
    "speed" => [
        "kmph" => "Kilometre Per Hour",
        "mps" => "Metre Per Second",
        "miph" => "Mile Per Hour"
    ],
    "time" => [
        "y" => "Year",
        "mo" => "Month",
        "wk" => "Week",
        "d" => "Day",
        "hr" => "Hour",
        "min" => "Minute",
        "s" => "Second",
        "us" => "Microsecond",
        "ms" => "Millisecond",
        "no" => "Nanosecond"
    ]
];


?>
