<?php require("../../includes/header.php"); ?><h1>Escape from the Mines</h1><div class="content">

<p><html> <body></body></html></p>
<h1 style="font-family: Arial;"><small>ACM International Collegiate     Programming Contest, Asia-Amritapuri Site, 2012</small></h1>
<h2>Escape from the Mines<br /> </h2>
<p> <i>It was after nightfall when they had entered the Mines. They had been going for several hours with only brief halts, when Gandalf came to his first serious check. Before him stood a wide dark arch opening into three passages: all led in the same general direction, eastwards; but the left-hand passage plunged down, while the right-hand climbed up, and the middle way seemed to run on, smooth and level but very narrow.</i> - The Fellowship of the Ring are lost in the Mines.</p>
<p> The Mines of Moria are a true testament of Dwarvish genius. And the Fellowship of the Ring are lost in the maze of rooms, halls and caverns. You have managed to acquire a copy of the blueprints, and if only you were part of the Fellowship, Gandalf need not have had to face the Balrog!</p>
<p> In this problem, we consider the Mines as consisting of rectangular rooms with their sides aligned parallel to the X (West-East) and Y (South-North) axes. Some rooms are situated within other rooms. The boundaries of any two rooms have no point in common. The rooms are numbered 0 to <b>N</b>-1. Your task is to determine for each room <b>i</b>, which room would you enter if you exit room <b>i</b>. If you exit into the open, output <b>-1</b>.</p>
<p> For example, if the blueprints of the Mines looked like:</p>
<p> <img src="/download/mine.jpg" alt="mine image" /> </p>
<p> Then, you should determine that:<br /> Room <b>0</b> exits into the open (<b>-1</b>)<br /> Room <b>1</b> exits into Room <b>0</b><br /> Room <b>2</b> exits into Room <b>1</b><br /> Room <b>3</b> exits into the open (<b>-1</b>)</p>
<p></p>
<h3>Input (STDIN):</h3>

<p> The first line contains an integer <b>N</b> followed by N lines. The i'th line defines the coordinates of the i'th room in the mines: <b>x1_i, y1_i, x2_i, y2_i</b>, where <b>(x1_i, y1_i)</b> are the coordinates of the southwest corner and <b>(x2_i, y2_i)</b> are the coordinates of the northeast corner of the i'th room.</p>
<p></p>
<h3>Output (STDOUT):</h3>

<p> Output <b>N</b> lines, the i'th line containing the number of the room into which the i'th room exits. Output <b>-1</b> if the i'th room exits into the open.</p>
<h3>Constraints:</h3>

<p> <b>1 &lt;= N &lt;= 100,000<br /> 0 &lt;= x1_i &lt; x2_i &lt;= 1,000,000,000<br /> 0 &lt;= y1_i &lt; y2_i &lt;= 1,000,000,000<br /> The borders of no two rooms have any point in common.</b></p>
<p></p>
<h3>Sample Input:</h3>

<p> <span style="font-family: Courier New,Courier,monospace;"> 4<br /> 0 0 10 10<br /> 2 3 7 8<br /> 3 4 5 6<br /> 12 10 13 15<br /> </span></p>
<h3>Sample Output:</h3>

<p> <span style="font-family: Courier New,Courier,monospace;"> -1<br /> 0<br /> 1<br /> -1<br /> </span></p>
<h3>Notes/Explanation of Sample Input:</h3>

<p> Given in the diagram.  </p>
<p>  </p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-01-2013</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>