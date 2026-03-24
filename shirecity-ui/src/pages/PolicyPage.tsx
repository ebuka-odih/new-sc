type PolicyVariant = 'terms' | 'cookies' | 'legal';

const content = {
  terms: {
    label: 'Terms',
    title: 'Service terms for the frontpage experience.',
    intro: 'This summary page keeps visitors inside the new template while setting clear expectations around access, account use, and service presentation.',
    sections: [
      'Use the platform lawfully and keep your access credentials confidential.',
      'Product terms, rates, and approvals remain subject to account review and applicable banking requirements.',
      'Service availability, security steps, and communication channels may change as controls evolve.',
    ],
  },
  cookies: {
    label: 'Cookies',
    title: 'How the experience uses browser data.',
    intro: 'Cookies and browser storage support session continuity, security controls, and page performance for the new frontpage experience.',
    sections: [
      'Security cookies help preserve authenticated state and protect form submissions.',
      'Performance cookies may be used to understand page stability and improve navigation flow.',
      'You can limit cookies in your browser, though some secure flows may degrade as a result.',
    ],
  },
  legal: {
    label: 'Legal',
    title: 'Important service and compliance notes.',
    intro: 'The new frontpage keeps legal guidance in the same interface instead of routing users into the previous design.',
    sections: [
      'Availability of accounts and features depends on jurisdiction, verification, and internal review.',
      'Statements on this site are informational and do not replace formal disclosures delivered during onboarding.',
      'For case-specific questions, use the contact page to reach the appropriate support path.',
    ],
  },
};

export default function PolicyPage({ variant }: { variant: PolicyVariant }) {
  const page = content[variant];

  return (
    <div className="pt-24 bg-bg-deep">
      <section className="py-32 glow-mesh">
        <div className="max-w-5xl mx-auto px-6 lg:px-8">
          <span className="micro-label">{page.label}</span>
          <h1 className="text-5xl md:text-7xl font-display font-light mb-8 leading-[0.95] text-gradient">
            {page.title}
          </h1>
          <p className="text-xl text-ink-muted font-light leading-relaxed max-w-3xl">
            {page.intro}
          </p>
        </div>
      </section>

      <section className="pb-32">
        <div className="max-w-5xl mx-auto px-6 lg:px-8">
          <div className="premium-card space-y-8">
            {page.sections.map((section, index) => (
              <div key={section} className={index === 0 ? '' : 'pt-8 border-t border-white/5'}>
                <p className="text-[10px] uppercase tracking-[0.24em] text-accent font-semibold mb-4">Section {index + 1}</p>
                <p className="text-2xl font-display font-light leading-relaxed">{section}</p>
              </div>
            ))}
          </div>
        </div>
      </section>
    </div>
  );
}
