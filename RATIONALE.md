# Design & UX Rationale

## Goal
Create a compact Command Center that surfaces urgent items and lets staff act quickly on mobile and desktop.

## Key decisions
- **Top navigation** with org actions and quick search — kept sticky to ensure navigation always available.
- **KPI cards**: 4 visible at desktop; stacked on mobile. Show headline number, delta, and small sparkline.
- **Analytics widgets**: mix of sparklines, small bar chart, donut, recent activity list — communicates both trend and current-state.
- **Smart filters**: grouped by primary filter (status/date/type) and secondary toggles; collapsible on mobile.
- **Action tracker table**: prioritized rows (due soon / overdue) visually emphasized; action buttons at row-level for quick triage.
- **Quick actions bar**: sticky on mobile at bottom to surface the most common tasks (check-in, add package, bill).


## Responsive strategy
- Mobile-first CSS with Tailwind responsive utilities.
- Collapse complex widgets into summary cards on small screens.
