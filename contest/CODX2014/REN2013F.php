<?php require("../../includes/header.php"); ?><h1>The Armory</h1><div class="content">

<p>Sam was disappointed by the fact that he couldn't be of any help to the Night's Watch. Jon always had a soft spot for Sam so he came up with an idea on how to make Sam useful for the Night's Watch. He told Sam to get equipment from Mole's Town for the Watch's Armory. Sam accepted the task and was delighted.</p>
<p>
Jon needed only three kinds of weapons, namely Shields,Swords and Spears. Each Crow ( member of the Night's Watch) needed a fixed amount of Shields Swords and Spears.Also some Shields ,Swords and Spears are already in the armory.</p>
<p>
Jon gave Sam some money with which he could buy the equipment.Each type of equipment had its own cost.Sam was to use all or some of the money to buy equipment so that a maximum number of Crows can be equipped and ready.</p>
<p>
You are to tell Jon, after Sam returns what is the maximum number of Crows that can be equipped and ready.</p>
<p> </p>
<h3>Input</h3>
<p>Each test file has a single test case. The test case starts with a single line containing 3 integers, A (0&lt;=A&lt;=100) , B (0&lt;=B&lt;=100) and C(0&lt;=C&lt;=100) the number of Shields, Swords and spears respectively that a single Crow needs to be equipped and ready.The next line contains 3 integers Sa(0&lt;=Pa&lt;=100) , Sb(0&lt;=Pb&lt;=100) and Sc(0&lt;=Pc&lt;=100) the number of Shields,Swords and Spears in the armory.The next line contains 3 integers Pa (1&lt;=Pa&lt;=100) , Pb(1&lt;=Pb&lt;=100) and Pc(1&lt;=Pc&lt;=100) the price of a single Shield,Sword and Spear respectively.The last line contains X (0&lt;=X&lt;=10^12) the money with Sam.</p>
<h3>Output</h3>
<p>The output should consist of a single line with the maximum number of Crows that can be equipped and ready when Sam returns with the equipment.</p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>

3 2 1
6 4 1
1 2 3
4
<b>Output:</b>

2
</pre><p> </p>
<h3>Explanation</h3>
<p>Each Crow needs 3 Shields , 2 Swords and 1 Spear to be equipped and ready. The armory already has 6 Shields , 4 Swords and 1 Spear. This can be used to equip only 1 Crow due to lack of Spears. Then Sam can go to the village to buy 1 more Spear for cost of 3 units and then return so as to fully equip 1 more Crow, giving a total of 2 crows.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/amitrc17">amitrc17</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-01-2014</td>
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