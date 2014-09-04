<?php require("../../includes/header.php"); ?><h1>Crossing the Desert</h1><div class="content">
<p>Its war time in Byte Land. The emperor of Bit Land has declared a war on Byte Land. Its General Timon who will be heading the operations for Byte Land. Now General Timon wants to increase his alliances who live across The Great Desert of Bits N Bytes.  The only mode of communication is camels.</p>
<p>Timon wants to inform his alliances about the war to seek their help by sending messengers to them .Now Byte Land has infinite number of camels and messengers. However the problem is that 1 camel needs 1 unit of food for 1 unit of distance that it covers and 1 camel can carry at most 1 unit of food. So 1 camel can at most cover 1 unit distance . But again the camel also needs food for returning to Byte Land which means 1 camel carrying 1 unit of food can travel 1/2 unit distance so that it can return to Byte Land. There are no food supply in the desert.</p>
<p>Timon doesn't want to lose his camels or messengers . So he has to send more than 1 camel together so that after covering some distance some part of the food (fractional)  carried by a camel can be given to the other camels so that others camels can cover greater distance and as well as the camel can return to Byte Land on the remaining amount of food. Can you help him out in sending messengers to his alliances ? Help him decide how many camels should he set out together so that one messenger reaches the destination .Once the camel reaches the destination your task is over. You need not worry about the return journey from the alliance destination.</p>
<h3>Input</h3>
<p>The first line contains an integer T the number of test cases .Each test case has a decimal X (units distance) the distance to covered in the desert to reach the destination.</p>
<h3>Output</h3>
<p>Output in each line 1 integer Y the number of camels that Timon should set out together such that at least 1 messenger reaches the alliances and none of the camels starve in the desert.Messenger should either reach Byte Land or the alliances.</p>
<h3>Constraints</h3>
<p>1&lt;= T &lt;= 10^5<br /><br />
1&lt;= X &lt;= 10 </p>
<h3>Sample Input</h3>
<p>2<br /><br />
1<br /><br />
1.5<br /></p>
<h3>Sample Output</h3>
<p>1<br /><br />
3<br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/snehansu6631">snehansu6631</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-09-2013</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>