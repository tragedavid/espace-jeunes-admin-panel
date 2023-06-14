import React from 'react';


function RoundedReseau() {
  return (
    <div className="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">
      <div>
        <a
          title="Espace-Jeunes"
          href="https://www.instagram.com/espace_jeunes_Vierzon/"
          target="_blank"
          className="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12"
        >
          <img
            className="object-cover object-center w-full h-full rounded-full"
            src="src/img/espacejeunes.png"
            alt="Espace-Jeunes"
          />
        </a>
      </div>
    </div>
  );
}

export default RoundedReseau;
