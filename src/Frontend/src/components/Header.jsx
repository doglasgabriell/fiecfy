import { useState } from "react";
import { IoIosNotifications } from "react-icons/io";

const Header = () => {
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
