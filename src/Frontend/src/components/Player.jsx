import { useState } from "react";
import { RiDislikeLine } from "react-icons/ri";
import { FcLike } from "react-icons/fc";
import { FaPlay } from "react-icons/fa";
import { IoIosPause } from "react-icons/io";

function Player() {
  const [like, setLike] = useState(false);
  const [playing, setPlaying] = useState(false);

  function liked() {
    setLike(!like);
  }

  function play() {
    setPlaying(!playing);
  }

  return (
    // O footer por padrao tem um tamanho horizontal de 100%. Entao para os 3 blocos dividimos em w-1/3 que equivale a 33,3333% de 100% cada um.
    <footer className="h-20 bg-black border-t border-zinc-800 px-4 flex items-center justify-between">
      {/* Bloco 1, cria-se a div de container, ocupando um tamanho horizontal de 33,33% */}
      <div className="flex items-center gap-3 w-1/3">
        <div className="w-14 h-14 bg-zinc-800 rounded"></div>
        <div className="flex flex-col">
          <strong>Bohemian Rhapsody</strong>
          <span>Queen</span>
        </div>

        <button
          className="w-10 h-10 flex items-center justify-center hover:scale-105 hover:transition-transform"
          onClick={liked}
        >
          {like ? <FcLike size={25} /> : <RiDislikeLine size={25} />}
        </button>
      </div>
      {/* Bloco 2 Controle, cria-se a div de container ocupando um tamanho horizontal de 33,33% */}
      <div className="flex items-center justify-center w-1/3">
        <button
          onClick={play}
          className="w-8 h-8 rounded-full bg-white text-black flex items-center justify-center font-bold hover:scale-105 transition-transform"
        >
          {playing ? <IoIosPause size={20} /> : <FaPlay size={15} />}
        </button>
      </div>
      {/* Bloco 3 cria-se tambem uma div com um tamanho horizontal de 33.33%.*/}{" "}
      {/* // ! Somando as 3 div container de 33,33%, da 100% da width do footer */}
      <div className="flex items-center justify-end w-1/3">
        <div className="w-24 h-1 bg-zinc-600 rounded-full">
          {/* Pega o tamanho horizontal da metade da div que ele é pai*/}
          <div className="w-1/2 h-full bg-white rounded-full"></div>
        </div>
      </div>
    </footer>
  );
}

export default Player;
