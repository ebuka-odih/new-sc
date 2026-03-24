import { Link } from 'react-router-dom';
import { Landmark, Phone, MapPin } from 'lucide-react';

export default function Footer() {
  const currentYear = new Date().getFullYear();

  return (
    <footer className="bg-bg-deep text-slate-500 pt-40 pb-20 border-t border-white/5">
      <div className="max-w-7xl mx-auto px-6 lg:px-8">
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-16 mb-24">
          {/* Brand */}
          <div className="space-y-8">
            <Link to="/" className="flex items-center gap-3">
              <div className="w-10 h-10 bg-white rounded-full flex items-center justify-center text-black">
                <Landmark size={20} />
              </div>
              <span className="text-xl font-display font-light text-white tracking-[0.1em] uppercase">
                Shires<span className="font-bold">city</span>
              </span>
            </Link>
            <p className="text-sm leading-relaxed font-light">
              Redefining the standard of digital banking. Secure, intelligent, and exclusively crafted for the modern elite.
            </p>
          </div>

          {/* Quick Links */}
          <div>
            <h4 className="text-[10px] uppercase tracking-[0.2em] font-bold text-white mb-8">Services</h4>
            <ul className="space-y-4 text-sm font-light">
              <li><Link to="/personal" className="hover:text-white transition-colors">Personal Banking</Link></li>
              <li><Link to="/business" className="hover:text-white transition-colors">Business Solutions</Link></li>
              <li><Link to="/security" className="hover:text-white transition-colors">Security Center</Link></li>
              <li><Link to="/open-account" className="hover:text-white transition-colors">Open Account</Link></li>
            </ul>
          </div>

          {/* Support */}
          <div>
            <h4 className="text-[10px] uppercase tracking-[0.2em] font-bold text-white mb-8">Support</h4>
            <ul className="space-y-4 text-sm font-light">
              <li><Link to="/contact-us" className="hover:text-white transition-colors">Concierge</Link></li>
              <li><Link to="/security" className="hover:text-white transition-colors">Security Center</Link></li>
              <li><Link to="/who-we-are" className="hover:text-white transition-colors">About</Link></li>
              <li><Link to="/login" className="hover:text-white transition-colors">Client Login</Link></li>
            </ul>
          </div>

          {/* Contact */}
          <div>
            <h4 className="text-[10px] uppercase tracking-[0.2em] font-bold text-white mb-8">Location</h4>
            <ul className="space-y-4 text-sm font-light">
              <li className="flex items-start gap-3">
                <MapPin size={16} className="text-accent shrink-0 mt-0.5" />
                <span>One Financial Plaza, New York</span>
              </li>
              <li className="flex items-center gap-3">
                <Phone size={16} className="text-accent shrink-0" />
                <span>+1 (800) NEXUS-01</span>
              </li>
            </ul>
          </div>
        </div>

        <div className="pt-12 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-8 text-[10px] uppercase tracking-[0.2em] font-bold">
          <p>© {currentYear} Shirescity International.</p>
          <div className="flex gap-8">
            <Link to="/terms" className="hover:text-white transition-colors">Terms</Link>
            <Link to="/cookies" className="hover:text-white transition-colors">Cookies</Link>
            <Link to="/legal" className="hover:text-white transition-colors">Legal</Link>
          </div>
        </div>
      </div>
    </footer>
  );
}
