import React from 'react';
import { Link } from 'react-router-dom';
import { motion, AnimatePresence } from 'motion/react';
import { Menu, X, Landmark } from 'lucide-react';
import { cn } from '../lib/utils';

export default function Navbar() {
  const [isOpen, setIsOpen] = React.useState(false);
  const pathname = typeof window !== 'undefined' ? window.location.pathname : '/';

  const navLinks = [
    { name: 'Home', path: '/' },
    { name: 'Personal', path: '/personal' },
    { name: 'Business', path: '/business' },
    { name: 'Security', path: '/security' },
    { name: 'About', path: '/who-we-are' },
  ];

  return (
    <nav className="fixed top-0 left-0 right-0 z-50 glass-dark border-b border-white/5">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="flex justify-between items-center h-24">
          <div className="flex items-center">
            <Link to="/" className="flex items-center gap-3 group">
              <div className="w-10 h-10 bg-white rounded-full flex items-center justify-center text-black group-hover:scale-110 transition-transform duration-500">
                <Landmark size={20} weight="light" />
              </div>
              <span className="text-xl font-display font-light text-white tracking-[0.1em] uppercase">
                Shires<span className="font-bold">city</span>
              </span>
            </Link>
          </div>

          {/* Desktop Nav */}
          <div className="hidden md:flex items-center gap-10">
            {navLinks.map((link) => (
              <Link
                key={link.name}
                to={link.path}
                className={cn(
                  "text-[11px] uppercase tracking-[0.2em] font-semibold transition-all hover:text-white",
                  pathname === link.path ? "text-white" : "text-slate-500"
                )}
              >
                {link.name}
              </Link>
            ))}
          </div>

          <div className="hidden md:flex items-center gap-6">
            <Link to="/login" className="text-[11px] uppercase tracking-[0.2em] font-semibold text-slate-500 hover:text-white transition-all">
              Login
            </Link>
            <Link to="/open-account" className="px-6 py-2.5 bg-white text-black text-[10px] uppercase tracking-[0.2em] font-bold rounded-full hover:bg-slate-200 transition-all">
              Join Now
            </Link>
          </div>

          {/* Mobile Menu Button */}
          <div className="md:hidden flex items-center">
            <button
              onClick={() => setIsOpen(!isOpen)}
              className="text-white/70 hover:text-white transition-colors"
            >
              {isOpen ? <X size={24} /> : <Menu size={24} />}
            </button>
          </div>
        </div>
      </div>

      {/* Mobile Nav */}
      <AnimatePresence>
        {isOpen && (
          <motion.div
            initial={{ opacity: 0, y: -20 }}
            animate={{ opacity: 1, y: 0 }}
            exit={{ opacity: 0, y: -20 }}
            className="md:hidden bg-bg-deep border-t border-white/5 overflow-hidden"
          >
            <div className="px-6 py-10 space-y-6">
              {navLinks.map((link) => (
                <Link
                  key={link.name}
                  to={link.path}
                  onClick={() => setIsOpen(false)}
                  className="block text-lg font-display font-light text-slate-400 hover:text-white transition-all"
                >
                  {link.name}
                </Link>
              ))}
              <Link
                to="/who-we-are"
                onClick={() => setIsOpen(false)}
                className="block text-lg font-display font-light text-slate-400 hover:text-white transition-all"
              >
                About
              </Link>
              <div className="pt-8 flex flex-col gap-4">
                <Link
                  to="/login"
                  onClick={() => setIsOpen(false)}
                  className="w-full py-4 text-center text-[11px] uppercase tracking-[0.2em] font-bold border border-white/10 rounded-full"
                >
                  Login
                </Link>
                <Link
                  to="/open-account"
                  onClick={() => setIsOpen(false)}
                  className="w-full py-4 text-center text-[11px] uppercase tracking-[0.2em] font-bold bg-white text-black rounded-full"
                >
                  Join Shirescity
                </Link>
              </div>
            </div>
          </motion.div>
        )}
      </AnimatePresence>
    </nav>
  );
}
