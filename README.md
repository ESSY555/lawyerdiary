# Lawyer Diary Dashboard

A modern, mobile-app-like dashboard for Lawyer Diary featuring a dark sidebar navigation and glass morphism design elements.

## Features

- **Dark Sidebar Navigation**: Matches the design specification with indigo accents
- **Glass Morphism UI**: Translucent white elements with backdrop blur effects
- **Color Scheme**: Consistent with the landing page (Indigo #4338ca primary)
- **shadcn/ui Components**: Modern, accessible UI components
- **Responsive Design**: Mobile-first approach

## Getting Started

### Install Dependencies

```bash
npm install
```

### Run Development Server

```bash
npm run dev
```

Open [http://localhost:3000](http://localhost:3000) in your browser.

### Build for Production

```bash
npm run build
npm start
```

## Project Structure

```
dashboard/
├── app/
│   ├── layout.tsx       # Root layout with font configuration
│   ├── page.tsx         # Main dashboard page
│   └── globals.css      # Global styles with color scheme
├── components/
│   ├── ui/              # shadcn/ui components
│   │   ├── button.tsx
│   │   ├── card.tsx
│   │   ├── alert.tsx
│   │   └── badge.tsx
│   ├── sidebar.tsx      # Navigation sidebar
│   └── dashboard-layout.tsx  # Main layout wrapper
└── lib/
    └── utils.ts         # Utility functions (cn helper)
```

## Color Scheme

The dashboard uses the same color scheme as the landing page:

- **Primary**: `#4338ca` (Indigo)
- **Primary Glow**: `#6366f1` (Lighter Indigo)
- **Secondary**: `#0f172a` (Very Dark Blue)
- **Sidebar Background**: `#223040` (Dark Blue/Gray)
- **Sidebar Active**: `#2c3b4d` (Lighter Dark Blue)
- **Text Body**: `#334155` (Slate Gray)
- **Text Light**: `#94a3b8` (Light Slate Gray)
- **Background**: `#f8fafc` (Very Light Gray) with gradient overlays

## Components

### Sidebar
The sidebar features:
- Logo with scales icon
- Navigation items with icons
- Active state indicator (indigo bar on left)
- Hover effects

### Dashboard Cards
Glass morphism cards with:
- Stats overview
- Recent cases
- Today's schedule
- Alerts and notifications

## Adding More shadcn/ui Components

To add more shadcn/ui components, you can use:

```bash
npx shadcn@latest add [component-name]
```

Available components include: dialog, dropdown-menu, form, input, select, table, and more.

## Customization

All colors are defined in `app/globals.css` using CSS variables. Modify these to adjust the color scheme:

```css
:root {
  --primary: #4338ca;
  --primary-glow: #6366f1;
  /* ... */
}
```
