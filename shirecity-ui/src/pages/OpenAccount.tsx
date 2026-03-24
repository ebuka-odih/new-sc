import { ArrowRight, Building2, Landmark, ShieldCheck } from 'lucide-react';
import { Link } from 'react-router-dom';

const pathways = [
  {
    icon: <Landmark size={24} className="text-accent" />,
    title: 'Personal Enrollment',
    description: 'Start with a streamlined digital profile and continue into client verification.',
    cta: 'Create Personal Profile',
    to: '/signup',
  },
  {
    icon: <Building2 size={24} className="text-accent" />,
    title: 'Business Onboarding',
    description: 'For teams and operating companies that need treasury, cards, and multi-user controls.',
    cta: 'Talk to Business Team',
    to: '/contact-us',
  },
  {
    icon: <ShieldCheck size={24} className="text-accent" />,
    title: 'Security Review',
    description: 'Review the protection model before starting your account application or invitation request.',
    cta: 'Review Security',
    to: '/security',
  },
];

export default function OpenAccount() {
  return (
    <div className="pt-24 bg-bg-deep">
      <section className="py-32 glow-mesh">
        <div className="max-w-7xl mx-auto px-6 lg:px-8">
          <div className="max-w-4xl">
            <span className="micro-label">Open Account</span>
            <h1 className="text-6xl md:text-7xl font-display font-light mb-8 leading-[0.95] text-gradient">
              Start inside the new
              <br />
              client flow.
            </h1>
            <p className="text-xl text-ink-muted font-light leading-relaxed max-w-3xl">
              This page replaces the old handoff to the legacy template. Choose the right path and continue onboarding without breaking the design system or navigation flow.
            </p>
          </div>
        </div>
      </section>

      <section className="py-24 border-y border-white/5">
        <div className="max-w-7xl mx-auto px-6 lg:px-8">
          <div className="grid grid-cols-1 lg:grid-cols-3 gap-6">
            {pathways.map((pathway) => (
              <div key={pathway.title} className="premium-card flex flex-col">
                <div className="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center mb-8">
                  {pathway.icon}
                </div>
                <h2 className="text-2xl font-display font-light mb-4">{pathway.title}</h2>
                <p className="text-ink-muted font-light leading-relaxed mb-10">{pathway.description}</p>
                <Link to={pathway.to} className="btn-outline mt-auto flex items-center justify-center gap-2">
                  {pathway.cta} <ArrowRight size={18} />
                </Link>
              </div>
            ))}
          </div>
        </div>
      </section>

      <section className="py-32">
        <div className="max-w-7xl mx-auto px-6 lg:px-8">
          <div className="bg-bg-surface border border-white/5 rounded-[3rem] p-10 md:p-16">
            <span className="micro-label">What Happens Next</span>
            <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
              {[
                'Create your digital profile',
                'Confirm your contact and security details',
                'Continue through verification and account activation',
              ].map((step, index) => (
                <div key={step}>
                  <p className="text-[10px] uppercase tracking-[0.24em] text-accent font-semibold mb-4">Step {index + 1}</p>
                  <p className="text-2xl font-display font-light leading-snug">{step}</p>
                </div>
              ))}
            </div>
          </div>
        </div>
      </section>
    </div>
  );
}
