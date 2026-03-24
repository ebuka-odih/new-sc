import { Mail, MapPin, Phone, ArrowRight } from 'lucide-react';
import { Link } from 'react-router-dom';

const channels = [
  {
    icon: <Phone size={20} className="text-accent" />,
    title: 'Client Concierge',
    body: '+1 (800) NEXUS-01',
  },
  {
    icon: <Mail size={20} className="text-accent" />,
    title: 'Service Desk',
    body: 'concierge@shirecity.com',
  },
  {
    icon: <MapPin size={20} className="text-accent" />,
    title: 'Head Office',
    body: 'One Financial Plaza, New York',
  },
];

export default function Contact() {
  return (
    <div className="pt-24 bg-bg-deep">
      <section className="py-32 glow-mesh">
        <div className="max-w-7xl mx-auto px-6 lg:px-8">
          <div className="grid grid-cols-1 lg:grid-cols-[0.95fr_1.05fr] gap-14">
            <div>
              <span className="micro-label">Contact Us</span>
              <h1 className="text-6xl md:text-7xl font-display font-light mb-8 leading-[0.95] text-gradient">
                Direct access,
                <br />
                not support maze.
              </h1>
              <p className="text-xl text-ink-muted font-light leading-relaxed max-w-2xl">
                Reach the Shirescity team for account onboarding, enterprise conversations, or client service questions. The page stays inside the new frontpage flow while preserving the same premium design language.
              </p>
            </div>

            <div className="premium-card">
              <p className="text-[10px] uppercase tracking-[0.24em] text-accent font-semibold mb-8">Contact Channels</p>
              <div className="space-y-6">
                {channels.map((item) => (
                  <div key={item.title} className="flex gap-4">
                    <div className="w-11 h-11 rounded-full bg-white/5 flex items-center justify-center shrink-0">
                      {item.icon}
                    </div>
                    <div>
                      <h3 className="text-xl font-display font-light mb-1">{item.title}</h3>
                      <p className="text-ink-muted font-light">{item.body}</p>
                    </div>
                  </div>
                ))}
              </div>

              <div className="mt-12 pt-10 border-t border-white/5">
                <p className="text-sm uppercase tracking-[0.2em] text-slate-500 font-semibold mb-4">Fast Paths</p>
                <div className="flex flex-col sm:flex-row gap-4">
                  <Link to="/open-account" className="btn-premium">Open Account</Link>
                  <Link to="/business" className="btn-outline">Business Banking</Link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section className="py-32 border-t border-white/5">
        <div className="max-w-7xl mx-auto px-6 lg:px-8">
          <div className="grid grid-cols-1 md:grid-cols-3 gap-6">
            {[
              'Private client onboarding',
              'Business account consultations',
              'Card invitation and service support',
            ].map((item) => (
              <div key={item} className="premium-card flex items-center justify-between gap-4">
                <p className="font-display font-light text-xl">{item}</p>
                <ArrowRight size={20} className="text-accent shrink-0" />
              </div>
            ))}
          </div>
        </div>
      </section>
    </div>
  );
}
