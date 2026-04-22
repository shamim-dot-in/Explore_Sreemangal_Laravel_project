const schemaData = {
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebSite",
      "@id": "https://shamim-dot-in.github.io/The-Tea-Garden-Valley-Initiative/#website",
      "url": "https://shamim-dot-in.github.io/The-Tea-Garden-Valley-Initiative/",
      "name": "The Tea Garden Valley Initiative",
      "description": "The Tea Garden Valley Initiative – A project showcasing tea garden culture, nature, and community development.",
      "publisher": {
        "@id": "https://shamim-dot-in.github.io/The-Tea-Garden-Valley-Initiative/#organization"
      },
      "inLanguage": "en"
    },
    {
      "@type": "Organization",
      "@id": "https://shamim-dot-in.github.io/The-Tea-Garden-Valley-Initiative/#organization",
      "name": "The Tea Garden Valley Initiative",
      "url": "https://shamim-dot-in.github.io/The-Tea-Garden-Valley-Initiative/",
      "logo": {
        "@type": "ImageObject",
        "url": "https://shamim-dot-in.github.io/The-Tea-Garden-Valley-Initiative/logo.png"
      },
      "sameAs": [
        "https://facebook.com/",
        "https://instagram.com/",
        "https://www.youtube.com/"
      ]
    },
    {
      "@type": "Person",
      "@id": "https://shamim-dot-in.github.io/The-Tea-Garden-Valley-Initiative/#person",
      "name": "Md Shamim Hossain",
      "url": "https://shamim-dot-in.github.io/The-Tea-Garden-Valley-Initiative/",
      "jobTitle": "SEO Expert & Web Developer",
      "sameAs": [
        "https://shamim.in",
        "https://www.linkedin.com/",
        "https://github.com/"
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://shamim-dot-in.github.io/The-Tea-Garden-Valley-Initiative/#webpage",
      "url": "https://shamim-dot-in.github.io/The-Tea-Garden-Valley-Initiative/",
      "name": "The Tea Garden Valley Initiative",
      "description": "Explore The Tea Garden Valley Initiative — nature, culture, development, and community storytelling.",
      "inLanguage": "en",
      "isPartOf": {
        "@id": "https://shamim-dot-in.github.io/The-Tea-Garden-Valley-Initiative/#website"
      },
      "breadcrumb": {
        "@id": "https://shamim-dot-in.github.io/The-Tea-Garden-Valley-Initiative/#breadcrumb"
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://shamim-dot-in.github.io/The-Tea-Garden-Valley-Initiative/#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://shamim-dot-in.github.io/The-Tea-Garden-Valley-Initiative/"
        }
      ]
    }
  ]
};

// Inject schema into page
const script = document.createElement("script");
script.type = "application/ld+json";
script.text = JSON.stringify(schemaData);
document.head.appendChild(script);
