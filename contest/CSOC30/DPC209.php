<?php require("../../includes/header.php"); ?><h1>Array</h1><div class="content">

<p align="center" class="MsoNormal">
        <b><u><br />
        <span><br />
        Array</span></u></b></p>
<p class="MsoNormal">
        <span><br />
         </span></p>
<p class="MsoNormal">
        <span><br />
        You are given a 2D array, initially equal to 0. The next input line contains an<br />
        integer with a Capital character H (Horizontal) or V (Vertical) or S (Square).</span></p>
<p class="MsoNormal">
        <span><br />
         </span></p>
<p class="MsoNormal">
        <span><br />
        You have to read a input line and follow the following criteria:</span></p>
<p class="MsoNormal">
</p><p>        <span><span>-<span times new>     <br />
        </span></span></span><br />
        <span><br />
        For every input, you have to start from the last row and first column of the<br />
        array. Start moving upward until you find an appropriate position to set the<br />
        input there. If you don’t find a position in that column, then move to next<br />
        column at the last row, and so on.</span></p>
<p class="MsoNormal">
</p><p>        <span><span>-<span times new>     <br />
        </span></span></span><br />
        <span><br />
        If the input line contains 2H, then at the position where you find two<br />
        horizontal elements containing 0, stop there and place 1 in those elements<br />
        positions.</span></p>
<p class="MsoNormal">
</p><p>        <span><span>-<span times new>     <br />
        </span></span></span><br />
        <span><br />
        If the input line contains 2V, then at the position where you find two vertical<br />
        elements containing 0, stop there and place 1 in those elements positions.</span></p>
<p class="MsoNormal">
</p><p>        <span><span>-<span times new>     <br />
        </span></span></span><br />
        <span><br />
        If the input line contains 2S, then at the position where you find two<br />
        horizontal and two vertical (a square of two elements) elements containing 0,<br />
        stop there and place 1 in those elements positions.</span></p>
<p class="MsoNormal">
</p><p>        <span><span>-<span times new>     <br />
        </span></span></span><br />
        <span><br />
        If you cannot find a position that fits the given input, simply ignore that<br />
        input.</span></p>
<p class="MsoNormal">
        <span><br />
         </span></p>
<p class="MsoNormal">
        <b><br />
        <span>Input</span></b><span></span></p>
<p class="MsoNormal">
        <span><br />
         </span></p>
<p class="MsoNormal">
        <span><br />
        <span> </span>The first input line contains two<br />
        integers i.e. the size of the 2D array. The maximum size of the 2D array will be<br />
        25x25. The next lines contain input to be set in the 2D array. The input will<br />
        end on the line containing a single 0.</span></p>
<p class="MsoNormal">
        <span><br />
         </span></p>
<p class="MsoNormal">
        <span><br />
         </span></p>
<p class="MsoNormal">
        <b><br />
        <span>Sample Input</span></b></p>
<p class="MsoNormal">
        <span><br />
        8 8</span></p>
<p class="MsoNormal">
        <span><br />
        2H</span></p>
<p class="MsoNormal">
        <span><br />
        2V</span></p>
<p class="MsoNormal">
        <span><br />
        3S</span></p>
<p class="MsoNormal">
        <span><br />
        2S</span></p>
<p class="MsoNormal">
        <span><br />
        2H</span></p>
<p class="MsoNormal">
        <span><br />
        3H</span></p>
<p class="MsoNormal">
        <span><br />
        0</span></p>
<p class="MsoNormal">
        <b><br />
        <span>Sample Output</span></b></p>
<p class="MsoNormal">
        <span><br />
        11000000</span></p>
<p class="MsoNormal">
        <span><br />
        11000000</span></p>
<p class="MsoNormal">
        <span><br />
        11100000</span></p>
<p class="MsoNormal">
        <span><br />
        11100000</span></p>
<p class="MsoNormal">
        <span><br />
        11100000</span></p>
<p class="MsoNormal">
        <span><br />
        11110000</span></p>
<p class="MsoNormal">
        <span><br />
        11100000</span></p>
<p class="MsoNormal">
        <span><br />
        11000000</span></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rushikesh30">rushikesh30</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-03-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>