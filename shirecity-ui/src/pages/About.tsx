import { Landmark, ShieldCheck, BriefcaseBusiness, Sparkles } from 'lucide-react';
import { Link } from 'react-router-dom';

const principles = [
  {
    icon: <Landmark size={24} className="text-accent" />,
    title: 'Relationship Banking',
    description: 'We design every touchpoint around trust, discretion, and long-term client alignment.',
  },
  {
    icon: <ShieldCheck size={24} className="text-accent" />,
    title: 'Measured Security',
    description: 'Operational controls, layered verification, and careful oversight define the service model.',
  },
  {
    icon: <BriefcaseBusiness size={24} className="text-accent" />,
    title: 'Modern Operations',
    description: 'Business and personal clients get one coherent platform instead of fragmented banking products.',
  },
  {
    icon: <Sparkles size={24} className="text-accent" />,
    title: 'Intentional Experience',
    description: 'The interface, service language, and account journeys are built to feel precise and premium.',
  },
];

export default function About() {
  return (
    <div className="pt-24 bg-bg-deep">
      <section className="py-32 glow-mesh">
        <div className="max-w-7xl mx-auto px-6 lg:px-8">
          <div className="grid grid-cols-1 lg:grid-cols-[1.1fr_0.9fr] gap-20 items-end">
            <div>
              <span className="micro-label">Who We Are</span>
              <h1 className="text-6xl md:text-7xl font-display font-light leading-[0.95] mb-8 text-gradient">
                A private banking feel,
                <br />
                rebuilt for digital clients.
              </h1>
              <p className="text-xl text-ink-muted max-w-3xl font-light leading-relaxed">
                Shirescity blends institutional discipline with a calm, modern client experience. The goal is not to look like every other fintech product. The goal is to feel deliberate, secure, and aligned with serious account holders.
              </p>
            </div>
            <div className="premium-card">
              <p className="text-[10px] uppercase tracking-[0.24em] text-accent font-semibold mb-6">Our Position</p>
              <p className="text-2xl font-display font-light leading-relaxed">
                We serve clients who want clarity in motion, confidence in infrastructure, and a banking interface that respects their time.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section className="py-32 border-y border-white/5">
        <div className="max-w-7xl mx-auto px-6 lg:px-8">
          <div className="mb-16">
            <span className="micro-label">Operating Principles</span>
            <h2 className="text-5xl font-display font-light leading-tight max-w-3xl">
              The service model behind the interface.
            </h2>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
            {principles.map((item) => (
              <div key={item.title} className="premium-card">
                <div className="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center mb-6">
                  {item.icon}
                </div>
                <h3 className="text-2xl font-display font-light mb-3">{item.title}</h3>
                <p className="text-ink-muted font-light leading-relaxed">{item.description}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      <section className="py-40">
        <div className="max-w-7xl mx-auto px-6 lg:px-8">
          <div className="bg-bg-surface border border-white/5 rounded-[3rem] p-10 md:p-16">
            <div className="grid grid-cols-1 lg:grid-cols-[1fr_auto] gap-10 items-center">
              <div>
                <span className="micro-label">Next Step</span>
                <h2 className="text-4xl md:text-5xl font-display font-light mb-6">
                  Talk to the team or begin the account journey.
                </h2>
                <p className="text-lg text-ink-muted font-light leading-relaxed max-w-2xl">
                  If you want to understand the service fit first, use the contact page. If you are ready to move, start the new-account flow inside the same interface.
                </p>
              </div>
              <div className="flex flex-col sm:flex-row gap-4">
                <Link to="/contact-us" className="btn-outline">Contact Us</Link>
                <Link to="/open-account" className="btn-premium">Open Account</Link>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  );
}
