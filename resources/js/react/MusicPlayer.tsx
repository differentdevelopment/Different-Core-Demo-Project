import React from "react";
import { render } from "react-dom";

import ReactJkMusicPlayer from "react-jinke-music-player";

import "react-jinke-music-player/assets/index.css";

const MusicPlayer: React.FC = () => {
    const js_audio_lists = window.FOR_REACT.audio_lists.map((audio: any) => ({
        name: audio.title??"",
        musicSrc: audio.file?.uuid ? '/file/' + audio.file.uuid : '',
        cover: audio.cover?.uuid ? '/file/' + audio.cover.uuid : '',
    }));

    return (
        <>
            <ReactJkMusicPlayer
                theme="dark"
                audioLists={js_audio_lists}
                glassBg={true}
                mode="full"
                toggleMode={false}
                showThemeSwitch={false}
                showReload={false}
                showDownload={false}
                defaultVolume={0.5}
            />
        </>
    );
};

if (document.getElementById("react_music_player")) {
    render(
        <MusicPlayer />,
        document.getElementById("react_music_player")
    );
}

declare global {
    interface Window {
        FOR_REACT: any;
    }
}
