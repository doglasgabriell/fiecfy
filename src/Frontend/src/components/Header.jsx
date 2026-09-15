import { useState } from "react";
import { IoIosNotifications } from "react-icons/io";
import { IoIosSearch } from "react-icons/io";

const Header = ({search, clear, setSearch}) => {
  const [notification, setNotification] = useState(3);
  const [aberto, setAberto] = useState(false);

  function open() {
    setAberto(!aberto);
  }

  function disabled() {
    setNotification(0);
    setAberto(!aberto);
  }

  return (
    <header className="sticky top-0 z-10 bg-zinc-900/90 p-4 flex items-center justify-between">
      <div className="flex gap-2">
        {/* Botões de Navegação */}
        <button className="w-8 rounded-full bg-black/70 flex items-center justify-center text-zinc-400 cursor-not-allowed">
          {"<"}
        </button>
        <button className="w-8 rounded-full bg-black/70 flex items-center justify-center text-zinc-400 cursor-not-allowed">
          {">"}
        </button>
      </div>

      {/* BARRA DE BUSCAR */}
      <div className="relative flex flex-col items-center justify-center ">
        <input
          type="text"
          className="bg-zinc-800 text-white rounded-full px-4 py-2"
          placeholder="Pesquisa"
          value={search}
          onChange={(e) => setSearch(e.target.value)}
        />
        <IoIosSearch className="absolute left-58 opacity-50" />
        <p className="absolute top-12">{`Buscando por: ${search}`}</p>

        <button
          onClick={clear}
          className="absolute top-20 bg-zinc-500 px-3 rounded-2xl font-bold shadow-2xl cursor-pointer hover:bg-zinc-700 transition-colors"
        >
          Limpar
        </button>
      </div>

      <div className="flex gap-4 items-center">
        <button className="text-zinc-400 font-bold hover:text-white hover:scale-105 transition-all">
          Inscrever-se
        </button>
        <button className="bg-white text-black font-bold px-6 py-2 rounded-full hover:scale-105 transition-transform">
          Entrar
        </button>

        <div className="flex items-center justify-center hover:bg-zinc-500/60 transition-colors rounded-full p-3 cursor-pointer relative">
          <button onClick={open} className="relative cursor-pointer">
            <div
              className={`flex absolute h-6 w-6 bg-green-800 rounded-full left- bottom-5 items-center justify-center font-bold ${
                notification > 0 ? "bg-red-800" : "bg-gren"
              }`}
            >
              {notification}
            </div>
            <IoIosNotifications size={30} />
          </button>

          {aberto && (
            <div className="w-25 h-15 rounded-md flex flex-col items-center justify-center absolute bg-zinc-200 text-zinc-100 font-bold top-12">
              <button
                onClick={disabled}
                className=" bg-green-700 p-2 rounded-2xl cursor-pointer"
              >
                LIMPAR
              </button>
            </div>
          )}
        </div>
      </div>
    </header>
  );
};

export default Header;
