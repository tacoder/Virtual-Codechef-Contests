<?php require("../../includes/header.php"); ?><h1>Crystals</h1><div class="content">

<p>The Evil Magician of Byteland was performing evil magical experiments, and he has left you with an impressive collection of evil magical crystals which he produced. Honestly, you would be overjoyed to dispose of (or in other words: destroy) these crystals, but destroying a magical crystal is not so easy. To achieve thus, you need to connect three different crystals (red, green and blue) and cast some magic spell to destroy this particular triplet. Each magical crystal has its own mana level. You need a certain amount of your own mana to destroy the triplet, precisely equal to the product of the mana levels of the crystals in the triplet you are destroying. Fortunately, your crystals are all already grouped in triplets, and there are no leftovers (so it is possible to actually destroy all of them); unfortunately, the composition of the triplets is not necessarily optimal from the point of view of mana consumption. However, you are allowed to choose two crystals of the same color, and swap them within triplets (crystals become very unstable and hazardous when not part of a triplet, so you cannot perform any operations more complicated than swapping). But there is a catch (there always is, isn't there?): swapping crystals requires a magic spell -- a spell with a significant mana cost, and what makes matters worse, using this spell (as any other spell) on the crystals being swapped makes them accumulate more mana into their mana level (exactly by <strong>1</strong>). Try to minimize the amount of mana you need to use to destroy all the crystals!</p>
<h3>Input</h3>
<p>First, 2 &#8804; <var>n</var> &#8804; 10<sup>5</sup>, the number of crystals of each color. Then, 0 &#8804; <var>c</var> &#8804; 10<sup>4</sup>, the mana cost of the swapping spell. After that, <var>n</var> triplets of integers follow, the <var>i</var>th triplet consisting of 0 &#8804; <var>r</var><sub><var>i</var></sub> &#8804; 100,   0 &#8804; <var>g</var><sub><var>i</var></sub> &#8804; 100, 0 &#8804; <var>b</var><sub><var>i</var></sub> &#8804; 100, representing the initial mana levels of successive Red, Green and Blue crystals, respectively.</p>
<h3>Output</h3>
<p>First 0 &#8804; <var>t</var> &#8804; 10<sup>6</sup>, the number of swaps. Then, <var>t</var> descriptions of the swaps in the order in which they are applied, each of the form: 1&#8804;<var>p</var>&#8804;3, 1&#8804;<var>x</var>&#8804;<var>n</var>, 1&#8804;<var>y</var>&#8804;<var>n</var>, meaning a swap between crystals of the <var>x</var>th and <var>y</var>th triplets (<var>p</var>=1 stands for Red, 2 for Green, 3 for Blue).</p>
<h3>Example</h3>
<pre><strong>Input:</strong>
3 10
1 1 1
5 5 5
10 10 10

<strong>Output:</strong>
2
1 1 3
3 1 2
<strong>Score:</strong>
11*1*6 + 5*5*2 + 2*10*10 + 10 + 10 = 336
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-07-2009</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>