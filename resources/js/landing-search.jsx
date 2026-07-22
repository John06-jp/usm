import React, { useState } from 'react';
import { createRoot } from 'react-dom/client';
import { Search, X } from 'lucide-react';

function LandingSearch({ action }) {
    const [query, setQuery] = useState('');

    return (
        <section className="home-search-panel" aria-labelledby="home-search-title">
            <p className="home-search-kicker">Online Public Access Catalog</p>
            <h1 id="home-search-title" className="home-search-title">
                Search the USM Library collection
            </h1>
            <p className="home-search-copy">
                Find books by title, author, subject, ISBN, or keyword.
            </p>

            <form action={action} method="GET" className="home-opac-search" role="search">
                <input type="hidden" name="view" value="books" />
                <Search className="home-opac-search__icon" aria-hidden="true" size={20} strokeWidth={2.2} />
                <input
                    type="search"
                    name="search"
                    value={query}
                    onChange={(event) => setQuery(event.target.value)}
                    onKeyDown={(event) => {
                        if (event.key === 'Escape') {
                            setQuery('');
                        }
                    }}
                    placeholder="Search books, authors, titles..."
                    className="home-opac-search__input"
                    aria-label="Search library catalog"
                    required
                />
                {query && (
                    <button
                        type="button"
                        className="home-opac-search__clear"
                        onClick={() => setQuery('')}
                        aria-label="Clear search"
                    >
                        <X size={17} aria-hidden="true" />
                    </button>
                )}
                <button type="submit" className="home-opac-search__button">Search OPAC</button>
            </form>
        </section>
    );
}

const searchRoot = document.getElementById('landing-search-root');

if (searchRoot) {
    createRoot(searchRoot).render(
        <LandingSearch action={searchRoot.dataset.searchAction} />,
    );
}
