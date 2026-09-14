import { useState } from "react";
import playlistData from "../data/playlistAPI";
import PlaylistAside from "./PlaylistAside";

function Sidebar() {
  const [playlistopen, setplaylistopen] = useState(false);

  function expanded() {
    setplaylistopen(!playlistopen);
  }

  const menuItems = [
    {
      id: 1,
      label: "Inicio",
      iconClass: "https://www.svgrepo.com/show/535439/home-1.svg",
    },
    {
      id: 2,
      label: "Buscar",
      iconClass: "https://www.svgrepo.com/show/532555/search.svg",
    },
  ];

  return (
    <aside className="w-72 bg-black p-6 flex flex-col h-full gap-6">
      <nav className="flex flex-col gap-4">
        {menuItems.map((menu) => (
          <div key={menu.id} className="flex gap-3">
            <img
              className="w-6 h-6 invert"
              src={menu.iconClass}
              alt={menu.label}
            />
            <a
              className="flex items-center gap-4 text-zinc-400 hover:text-white transition-colors font-semibold"
              href="#"
            >
              {menu.label}
            </a>
          </div>
        ))}
      </nav>

      <div className="w-full h-px bg-zinc-800"></div>

      <nav className="flex flex-col gap-5 w-full ">
        <a
          href="#"
          className="flex items-center gap-4 text-zinc-400 hover:text-white transition-colors font-semibold"
        >
          <div className="w-6 h-6 bg-zinc-300 rounded-sm"></div> Sua Biblioteca
        </a>

        <div className="relative flex w-full">
          <button
            onClick={expanded}
            className="flex items-center gap-4 text-zinc-400 hover:text-white transition-colors font-semibold cursor-pointer"
          >
            <div className="w-6 h-6 bg-zinc-300 rounded-sm"></div> Minhas
            playlist
          </button>

          {playlistopen && (
            <div className="flex flex-col absolute items-center p-2 bg-zinc-700/60 w-full h-160 top-10 gap-2 overflow-y-auto">
              {playlistData.map((p) => (
                <PlaylistAside key={p.id} imagem={p.imagem} titulo={p.titulo} />
              ))}
            </div>
          )}
        </div>
      </nav>
    </aside>
  );
}

export default Sidebar;
