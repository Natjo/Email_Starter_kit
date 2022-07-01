                </td>
            </tr>
        </table>
    </body>
</html>

<button id="download">Download</button>

<div id="downloads">
    <button class="btn-close">X</button>
    <h2>Assets</h2>
    <section>
        <h3>Images</h3>
        <ul class="downloads-list">
            <li></li>
        </ul>
    </section>
    <hr>
    <section>
        <h3>html</h3>
        <textarea class="downloads-html"></textarea>
</div>
</section>
<style>
    #download {
        position: fixed;
        top: 10px;
        left: 10px;
    }

    #downloads {
        position: fixed;
        top: 0;
        left: 0;
        width: 50%;
        height: 100vh;
        padding: 20px;
        background-color: #fff;
        overflow-y: auto;
        line-height: 30px;
        grid-auto-rows: min-content;
        display: none;
        box-sizing: border-box;
        box-shadow: 0 0 30px rgba(0, 0, 0, 0.6);
    }

    #downloads.show {
        display: grid;
    }

    #downloads h2 {
        margin: 0 0 10px 0;
    }

    #downloads h3 {
        margin: 0 0 5px 0;
    }

    #downloads ul {
        margin: 0;
        line-height: 1.2;
    }

    #downloads hr {
        margin-top: 20px;
        margin-bottom: 20px;
        border: 0;
        width: 100%;
        border-top: 1px solid #ccc;
    }

    #downloads textarea {

        width: 100%;
        height: 300px;

    }

    #downloads .btn-close {

        width: 30px;
        height: 30px;
        position: absolute;
        right: 10px;
        top: 10px;


    }
</style>
<script>
    const title = "<?= get_the_title(); ?>";
    const btn_download = document.getElementById("download");
    const downloads = document.getElementById("downloads");
    const downloads_list = downloads.querySelector(".downloads-list");
    const downloads_html = downloads.querySelector(".downloads-html");
    const btn_close = downloads.querySelector(".btn-close");

    btn_close.onclick = () => {
        downloads.classList.remove('show');
    }
    btn_download.onclick = () => {
        downloads.classList.add('show');

        const arr = [];
        let mark = "";
        for (let img of document.images) {
            if (arr.includes(img.currentSrc) === false) {
                arr.push(img.currentSrc);
                const file = img.currentSrc;
                var filename = file.substring(file.lastIndexOf('/') + 1);
                mark += `<li><a href="${file}" download="${filename}">${filename}</a></li>`;
            }
        }
        downloads_list.innerHTML = mark;




        let html = '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">';
        html += String(document.childNodes[1].outerHTML);
        downloads_html.value = html;
    }
</script>