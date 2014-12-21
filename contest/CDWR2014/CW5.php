<?php require("../../includes/header.php"); ?><h1>CHESS MASTER</h1><div class="content">

<p>With her new hair-style, Penny has to listen to all the comments of Sheldon Cooper. She (God knows why) challenged Sheldon Cooper for a match of Chess. Penny wants to defeat Dr. Sheldon Cooper in the game of chess. Although, she tried very hard, she is in a situation and wants your help. It is your duty to help Penny. The situation goes like this. Penny has only "King" left with her, while Sheldon has a <b>King</b>, a <b>Queen</b>, a <b>Rook</b> and a <b>Bishop</b>. You are given a situation of a chess board as input.  </p>
<p>Sheldon has given Penny a CHECK, you need to tell Penny, whether this is the end of the game or she still has a chance. In case, she still has a choice, ensure she is safe in the next step too.</p>
<p> P.S. All rules of chess apply here. The death of a <b>King</b> is considered as end of the game. You can also refer to  <a href="http://en.wikipedia.org/wiki/Chess">http://en.wikipedia.org/wiki/Chess</a> for the rules.</p>
<h2>Input</h2>
<p>A description of the 8X8 chessboard grid is given. Empty boxes are shown as "<b>_</b>", Penny's King is shown by <b>P</b>, Sheldon's king is shown by <b>S</b>, and the queen, rook and bishop are shown by <b>Q</b>, <b>R</b> and <b>B</b> respectively.</p>

<h2>Output</h2>
<p>Print <b>CHECKMATE!</b> if its a checkmate, else print <b>NOT YET!</b>. Consider each and every possible ways, and remember ALL rules of Chess applies here.</p>

<h2>Example</h2>
<p> <b>Input:</b></p>
<p>____B___<br />
<br />________<br />
<br />__Q_____<br />
<br />________<br />
<br />____P_S_<br />
<br />_R______<br />
<br />________<br />
<br />________</p>
<p> <b>Output:</b></p>
<p>NOT YET!</p>

<p> <b>Input:</b></p>
<p> ________<br />
<br />________<br />
<br />___S____<br />
<br />______B_<br />
<br />Q__P___<br />
<br />_R______<br />
<br />________<br />
<br />________</p>
<p> <b>Output:</b></p>
<p>CHECKMATE!</p>
<h2>Explanation</h2>
<p><b>Example case 1.</b> Penny can still move her King to either one step Up or one step to left. So, this isn't a checkmate.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/srujanjha">srujanjha</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-10-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>