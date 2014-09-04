<?php require("../../includes/header.php"); ?><h1>ToGgLeD</h1><div class="content">

<p>Sheldon is a little geek living in Texas. While his friends like to play outside, little Sheldon likes to play around with ICs and lasers in his house. He decides to build N clap activated toggle machines each with one power inlet and one outlet. Each machine works when its power source inlet is receiving power. When the machine is in 'ON' state and is receiving power at its inlet, it makes power available at its power outlet to which a bulb or another ToGgLe machine could be attached.</p>
<p>
Suppose Sheldon attached 2 such machines to one another with the power inlet of the first machine attached to a power source at his house and the outlet of the second machine to a bulb. Initially both machines are in 'OFF' state and power source to first machine is off too. Now the power source is switched on. The first machine receives power but being in the 'OFF' state it does not transmit any power. Now on clapping the first ToGgLe machine toggles to 'ON' and the second machine receives power. On clapping once more the first toggles to 'OFF' and the second toggles to 'ON'. But since the second ToGgLe machine receives no power the bulb does not light up yet. On clapping once more, the first machine which is still receiving power from the source toggles to 'ON' and the second which was already 'ON' does not toggle since it was not receiving power. So both the machine are in 'ON' state and the bulb lights up and little Sheldon is happy.</p>
<p>
But when Sheldon goes out for a while, his evil twin sister attaches N such ToGgLe machines (after making sure they were all in 'OFF' state) and attaches the first to a power source (the power source is initially switched off) and the last ToGgLe machine to a bulb. Sheldon is horrified to find that his careful arrangement has been disturbed.</p>
<p>
Coders, help the poor boy by finding out if clapping k times for the N ToGgLe machines (all in 'OFF' state with the first one connected to a switched off power source and last one to a bulb) would light the bulb. Hurry before Sheldon has a nervous breakdown!</p>
<h3>Input</h3>
<p>First line has number of test cases, T.<br /><br />
Following T lines have N, k separated by a single space where N is the number of <br />ToGgLe machines and k is the number of times Sheldon clapped.</p>
<h3>Output</h3>
<p>T lines with cach line of the form: "ON" (just the word on without the double quotes) if the bulb is 'ON' for the<br />
test case numbered n and "OFF" (just the word off without the double quotes) if the bulb is 'OFF' for the test case numbered n.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
4 0
4 47
1 0
1 1


<b>Output:</b>
OFF
ON
OFF
ON
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rajatkhanduja">rajatkhanduja</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-08-2012</td>
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
            <td>ADA, ASM, BASH, C, C99 strict, CAML, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, GO, HASK, ICON, JAR, JAVA, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PYTH, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>