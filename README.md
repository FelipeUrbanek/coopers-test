# Coopers Test - Landing Page

## 📋 Sobre o Projeto

Landing page desenvolvida seguindo rigorosos padrões de desenvolvimento web, com foco especial em acessibilidade (WCAG), metodologia Mobile First e performance.

## 🔍 Avaliação Técnica

### HTML

- **Semântica e Acessibilidade**

  - Implementação completa de tags HTML5 semânticas (`<header>`, `<main>`, `<section>`, `<article>`, `<nav>`, `<footer>`)
  - Atributos ARIA implementados em todo o código (`aria-label`, `aria-hidden`, `role`, `aria-labelledby`)
  - Skip links para navegação por teclado
  - Textos alternativos em todas as imagens
  - Estrutura hierárquica correta de headings (h1-h6)
  - Testado com WAVE Web Accessibility Tool

- **Independência de Recursos**

  - Conteúdo acessível sem CSS
  - Funcionalidades básicas mantidas sem JavaScript
  - Fallbacks implementados para recursos avançados

- **Organização do Código**
  - Comentários explicativos em seções importantes
  - Classes e IDs seguindo padrão BEM
  - Código limpo e sem redundâncias
  - Indentação e formatação consistentes

### CSS

- **Mobile First**

  - Desenvolvimento iniciado pela versão mobile
  - Media queries para breakpoints principais:
    ```css
    /* Mobile: < 768px (padrão) */
    /* Tablet: >= 768px */
    @media (min-width: 768px) {
      ...;
    }
    /* Desktop: >= 1024px */
    @media (min-width: 1024px) {
      ...;
    }
    ```

- **Performance e Organização**

  - Preprocessador SCSS para melhor manutenção
  - Arquitetura de arquivos modular:
    ```
    css/
    ├── partial/
    │   ├── _colors.scss
    │   ├── _layout.scss
    │   └── others.scss
    ├── style.scss
    └── style.css
    ```
  - CSS minificado para produção
  - Carregamento assíncrono de estilos não críticos

- **Compatibilidade**
  - Testado nos principais navegadores (Chrome, Firefox, Safari, Edge)
  - Fallbacks para propriedades modernas
  - Prefixos automáticos para maior compatibilidade

### JavaScript

- **Implementação Híbrida**

  - Vanilla JavaScript para funcionalidades core
  - jQuery para manipulações complexas do DOM
  - Plugins:
    - Splide.js para carrossel
    - AOS para animações de scroll
    - SVG Inject para otimização de SVGs

- **Graceful Degradation**

  - Funcionalidades básicas mantidas sem JavaScript
  - Fallbacks em CSS para elementos interativos
  - Mensagens informativas quando JS é necessário

- **Performance**
  - Carregamento assíncrono de scripts não críticos
  - Minificação de arquivos JavaScript
  - Lazy loading de imagens e recursos pesados

## 🚀 Como Executar

1. Clone o repositório

```bash
git clone [url-do-repositorio]
```

2. Instale as dependências (se necessário)

```bash
npm install
```

3. Para desenvolvimento com SCSS

```bash
npm run sass:watch
```

4. Para build de produção

```bash
npm run build
```

## 📱 Breakpoints Responsivos

- **Mobile**: < 768px (padrão)

  - Layout em coluna única
  - Menus adaptados para touch
  - Fontes e espaçamentos otimizados

- **Tablet**: 768px - 1023px

  - Layout em duas colunas
  - Navegação adaptada
  - Carrossel responsivo

- **Desktop**: ≥ 1024px
  - Layout completo
  - Hover states
  - Animações expandidas

## ⚡ Performance

- Pontuação Lighthouse:
  - Performance: 90+
  - Acessibilidade: 100
  - Melhores Práticas: 95+
  - SEO: 100

## 🔧 Ferramentas Utilizadas

- WAVE Web Accessibility Evaluation Tool
- Lighthouse
- W3C Validator
- Can I Use
- PageSpeed Insights

## 📫 Contato

Para dúvidas ou sugestões sobre o teste, entre em contato.
