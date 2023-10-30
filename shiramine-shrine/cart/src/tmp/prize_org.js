


const items = [
  {
    pid: "o-fuda-family-safety",
    image: "",
    category: "御神札",
    name: "御神札",
    type: "家内安全",
    color: [],
    price: 800
  },
  {
    pid: "o-fuda-yaku-yoke",
    image: "",
    category: "御神札",
    name: "御神札",
    type: "方除・魔除・赤札",
    color: [],
    price: 500
  },
  {
    pid: "o-fuda-sen-ryu",
    image: "",
    category: "御神札",
    name: "御神札",
    type: "潜龍大神",    
    color: [],
    price: 800
  },
  {
    pid: "thokon-tukusu-mamori",
    image: "",
    category: "御守",
    name: "闘魂尽す守（マグネット式）",
    type: [],    
    color: ["赤", "黒"],
    price: 800
  },
  {
    pid: "kyugi-thokon-mamori",
    image: "",
    category: "御守",
    name: "球技闘魂守（角）",
    type: [],    
    color: ["青", "赤", "白"],
    price: 700
  },
  {
    pid: "thokon-mamori-kado",
    image: "",
    category: "御守",
    name: "闘魂守（角）",
    type: [],    
    color: ["青", "赤", "白"],
    price: 700
  },
  {
    pid: "thokon-mamori-kuroji",
    image: "",
    category: "御守",
    name: "闘魂守（角）",
    type: [],    
    color: ["黒地・青文字", "黒地・赤文字", "黒地・金文字"],
    price: 700
  },
  {
    pid: "thokon-mamori-maru",
    image: "",
    category: "御守",
    name: "闘魂守（丸）",
    type: [],    
    color: ["青", "赤", "白"],
    price: 700
  },
  {
    pid: "kisei-mamori",
    image: "",
    category: "御守",
    name: "祈星守",
    type: [],    
    color: ["青地・紐白", "青地・紐橙", "白地・紐白", "白地・紐橙", "白地・紐青", "黒地・紐青", "黒地・紐橙"],
    price: 800
  },
  {
    pid: "deau-wa",
    image: "",
    category: "授与品",
    name: "出逢う輪",
    type: [],    
    color: [],
    price: 800
  },
  {
    pid: "mori-ya",
    image: "",
    category: "授与品",
    name: "守り矢",
    type: ["必勝祈願", "開運厄除", "社運隆昌", "心願成就"],    
    color: [],
    price: 1500
  },
  {
    pid: "hama-ya",
    image: "",
    category: "授与品",
    name: "破魔矢",
    type: [],    
    color: [],
    price: 700
  },
  {
    pid: "traffic-safety-sticker",
    image: "",
    category: "授与品",
    name: "交通安全ステッカー",
    type: [],    
    color: [],
    price:700 
  },
  {
    pid: "traffic-safety-car-mamori",
    image: "",
    category: "授与品",
    name: "交通安全車体守",
    type: [],    
    color: [],
    price: 700
  },
  {
    pid: "kanau-wa",
    image: "",
    category: "授与品",
    name: "『五色版』叶う輪",
    type: ["台紙：白黒", "台紙：緑"],    
    color: [],
    price: 800
  },
  {
    pid: "kanau-wa",
    image: "",
    category: "授与品",
    name: "叶う輪",
    type: ["一般", "サッカー、フットサル", "野球、ソフトボール", "バレー、ビーチバレー", "バスケットボール", "テニス、スカッシュ", "バドミントン", "卓球"],    
    color: ["赤", "青", "黄", "緑"],
    price: 800
  },
  {
    pid: "hair-band",
    image: "",
    category: "授与品",
    name: "ヘアバンド",
    type: [],    
    color: ["白", "赤", "黄", "紫", "黒", "せいじ", "ピンク", "青", "橙", "グリーン", "濃紺", "緑"],
    price: 800
  },
  {
    pid: "wrist-band",
    image: "",
    category: "授与品",
    name: "リストバンド",
    type: [],    
    color: ["青", "赤", "黒", "白", "黄"],
    price: 800
  },
  {
    pid: "towel",
    image: "",
    category: "授与品",
    name: "タオル（赤・青　1組）サイズ：タテ約30cm×ヨコ約40cm",
    type: [],    
    color: [],
    price: 500
  },
  {
    pid: "towel-long",
    image: "",
    category: "授与品",
    name: "ロングタオル サイズ：タテ約36cm×ヨコ約84cm",
    type: [],    
    color: [],
    price: 500
  },
  {
    pid: "e-ma-sky",
    image: "",
    category: "授与品",
    name: "絵馬（心願成就）",
    type: ["銀河・黒", "宵の明星・青", "明の明星・茜"],    
    color: [],
    price: 800
  },
  {
    pid: "e-ma",
    image: "",
    category: "授与品",
    name: "絵馬",
    type: ["スポーツ系", "恋愛成就", "文化系"],    
    color: [],
    price: 800
  },
  {
    pid: "kanau-wa-hashi",
    image: "",
    category: "授与品",
    name: "叶う和箸",
    type: ["心願成就・黄", "除災招福・赤"],    
    color: [],
    price: 800
  },
  {
    pid: "syuin-tyou",
    image: "",
    category: "授与品",
    name: "御朱印帳",
    type: ["御朱印帳", "限定御朱印帳"],    
    color: [],
    price: 2000
  },
  {
    pid: "mari-dorei",
    image: "",
    category: "授与品",
    name: "まり土鈴",
    type: [],    
    color: [],
    price: 1500
  },
  {
    pid: "ba-tei",
    image: "",
    category: "授与品",
    name: "馬蹄",
    type: [],    
    color: ["金", "銀"],
    price: 700
  },
  {
    pid: "yui-syo",
    image: "",
    category: "由緒（朱印付き）",
    name: "",
    type: [],    
    color: [],
    price: 300
  }
];